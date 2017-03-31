<?php

namespace App\Http\Controllers\Admin\Members;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\Departments;
use App\Models\Locations;
use App\Models\PermissionsGroups;
use App\User;
use  App\Models\PermissionsRoles;
use App\Models\permissions;
use Illuminate\Routing\Redirector;


class UserController extends Controller
{

    public function __construct(Redirector $redirect)
    {
        try {

            $this->authorize('user.access');
        } catch (Exception  $e) {

            return $redirect->to('deny')->send();

        }
    }

    /**
     * this is function for display.
     * @param none.
     * $departments get all department.
     * $locations  get  all   location.
     * $permissionsGroups get all groups of permissions.
     * $users it display by paginate for each five person.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     **/

    public function index()
    {

        try {

            $this->authorize('user.show');
            $permissions = permissions::all();
            $departments = Departments::all();
            $locations = Locations::all();
            $permissionsGroups = PermissionsGroups::all();
            $users = user::paginate(5);
            $permissionsRoles = PermissionsRoles::all();
            return view('admin.user.index', array(
                    'departments' => $departments,
                    'Locations' => $locations,
                    'PermissionsGroups' => $permissionsGroups,
                    'users' => $users,
                    'PermissionsRoles' => $permissionsRoles,
                    'permissions' => $permissions

            ));
        } catch (Exception $e) {
            return response()->json([
                'status' => 'erorr'
            ], 404);
        }
    }

    /**
     * this is function for add new user
     * @param  $request  handel all input
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     **/

    public function add(Request $request)
    {
        try {

            $this->authorize('user.store');
            $this->validate($request, [
                'name' => 'required|max:255',
                'fullname' => 'required',
                'email' => 'required|email|unique:users',
                'Password' => 'required|min:6',
            ]);

            User::create([
                'name' => $request->input('name'),
                'fullname' => $request->input('fullname'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'status' => 0,
                'department_id' => $request->input('department'),
                'location_id' => $request->input('location'),
                'permission_group_id' => $request->input('permestion_group')
            ]);

            return 'success';
        } catch (Exception $e) {
            return response()->json([
                'status' => 'erorr'
            ], 500);
        }

    }

    /**
     * this is function for block user
     * @param  $request that handel id of user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     **/
    public function block(Request $request)
    {
        try {

            $this->authorize('user.edit');
            $user = User::find($request->input('id'));
            if ($user->status == 1) {
                $user->status = 0;
            } else {
                $user->status = 1;
            }
            $user->save();
            return 'success';
        } catch (Exception $e) {
            return response()->json([
                'status' => 'erorr'
            ], 404);
        }
    }

    /**
     * this is function for delete user
     * @param  $request that handel id of user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     **/
    public function delete(Request $request)
    {
        try {
            $this->authorize('user.delete');
            $user = User::find($request->input('id'));
            $user->delete();
            return 'success';

        } catch (Exception $e) {
            return response()->json(['status' => 'erorr'], 404);
        }
    }

    /**
     * this is function for change permission group of user
     * @param  $request that handel id of user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     **/
    public function changeGroup(Request $request)
    {
        try {
            $this->authorize('user.edit');
            $user = User::find($request->input('id'));
            $user->permission_group_id = $request->input('Permestions');
            $user->save();
            return $request->all();
        } catch (Exception $e) {
            return response()->json([
                'status' => 'erorr'
            ], 404);
        }


    }

}
