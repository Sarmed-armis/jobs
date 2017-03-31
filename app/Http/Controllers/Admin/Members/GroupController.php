<?php
namespace App\Http\Controllers\Admin\Members;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PermissionsGroups as permissionGroupModel;
use App\Models\PermissionsRoles as permissionsRolesModel;
use App\Models\Permissions as permissionsModel;
use Exception;
use Illuminate\Routing\Redirector;


class GroupController extends Controller
{
    public function __construct(Redirector $redirect)
    {
        try {
            $this->authorize('group.access');
        } catch (Exception  $e) {
            return $redirect->to('deny')->send();
        }

    }

    /**
     * this is function for display all group
     * @param  none
     * $permissionGroupModel get group permissions  details for each 5 .
     * $permissionsModel get all permissions .
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     **/

    public function index()
    {
        try {
            $this->authorize('group.show');

            $permissionGroupModel = permissionGroupModel::paginate(5);

            $permissionsModel = permissionsModel::all();

            return view('admin.group.index', array(
                'permissionGroupModel' => $permissionGroupModel,
                'permissionsModel' => $permissionsModel
            ));
        } catch (Exception $e) {

            return response()->json(['status' => 'erorr'], 404);
        }
    }

    /**
     * this is function for display the details of group permission
     * @param  $request that handel the group_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     **/

    public function show(Request $request)
    {

        $permissionsRoles = permissionsRolesModel::where('group_id', $request->input('id'))->get();
        $permissionsRoleArray = Array();

        foreach ($permissionsRoles as $permissionsRole) {

            $permissionsRoleArray[] = $permissionsRole->roles->description;

        }

        return $permissionsRoleArray;

    }

    /**
     * this is function for display the details of group permission for edit
     * @param  $request that handel the group_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     **/

    public function getOldPermission(Request $request)
    {

        try {

            $this->authorize('group.edit');

            $permissionsRoles = permissionsRolesModel::where('group_id', $request->input('id'))->get();
            $permissionsRoleArray = Array();

            foreach ($permissionsRoles as $permissionsRole) {

                $permissionsRoleArray[] = $permissionsRole->roles->id;

            }

            return $permissionsRoleArray;
        } catch (Exception $e) {
            return response()->json([
                'status' => 'erorr'
            ], 404);
        }
    }

    /**
     * this is function for add new group
     * @param  $request that handel all input value
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     **/

    public function add(Request $request)
    {


        try {
            $this->authorize('group.store');

            $this->validate($request, [
                'permissions' => 'required',
                'groupname' => 'required',
                'description' => 'required|max:255',
            ]);

            $permissionsRoles = new permissionsRolesModel;
            $setPermissions = [];
            $permissions = $request->input('permissions');
            $group = new permissionGroupModel();
            $group->name = $request->input('groupname');
            $group->description = $request->input('description');
            $group->save();
            $group->id;

            foreach ($permissions as $permission) {

                $setPermissions[] = [
                    'group_id' => $group->id,
                    'permission_id' => $permission

                ];


            }
            $permissionsRoles->insert($setPermissions);

            return redirect()->back();
        } catch (Exception $e) {

            return response()->json([
                'status' => 'erorr'
            ], 404);

        }
    }

    /**
     * this is function for edit group details
     * @param  $request that handel the group_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     **/

    public function edit(Request $request)
    {

        try {
            $this->authorize('group.edit');

            if ($request->input('groupname') != null) {
                $PermissionsGroups = permissionGroupModel::find($request->input('id'));
                $PermissionsGroups->name = $request->input('groupname');
                $PermissionsGroups->description = $request->input('description');
                $PermissionsGroups->save();

                return 'done';

            } else {

                $PermissionsGroups = permissionGroupModel::find($request->input('id'));

                return $PermissionsGroups;
            }
        } catch (Exception $e) {

            return response()->json(['status' => 'erorr'], 404);

        }

    }

    /**
     * this is function for change permissions of the selected group
     * @param  $request that handel the group_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     **/

    public function changePermission(Request $request)
    {
        try {

            $this->authorize('group.edit');
            $id = $request->input('id');
            permissionsRolesModel::where('group_id', $id)->delete();
            $editPermissions = $request->input('permissiions');
            foreach ($editPermissions as $editPermission) {

                $setPermissions[] = [
                    'group_id' => $id,
                    'permission_id' => $editPermission

                ];

            }
            permissionsRolesModel::insert($setPermissions);

            return redirect()->back();
        } catch (Exception $e) {
            return response()->json(['status' => 'erorr'], 404);

        }
    }

}
