<?php

namespace App\Http\Controllers\Admin\Jobs;

use App\Http\Requests\Admin\Jobs\Add;
use App\Http\Controllers\Controller;
use App\Models\QuestionTypes as questionTypeModel;
use App\Models\Departments as departmentModel;
use App\Models\Locations as locationModel;
use App\Models\Questions as questionsModel;
use App\Models\QuestionAnswer as answerModel;
use App\Models\Languages as languagesModel;
use App\Models\Jobs as jobsModel;
use \App\Models\JobRequirements as requirementsModel;
use \App\Models\JobResponsibilities as responsibilitiesModel;
use \App\Models\JobLanguage as jobLanguageModel;
use Carbon\Carbon;
use Illuminate\Http\Request;


class JobsController extends Controller
{
    /**
     * this is function for display jobs
     * @parama none
     * $languages return the language
     * $jobs return the jobs details for each  5
     * $questionsType  return the questions type
     *  $departments return the department name
     *  $location return the locations name
     **/
    public function index()
    {
        $languages = languagesModel::all();
        
        $questionsType = questionTypeModel::all();

        $departments = departmentModel::all();

        $locations = locationModel::all();

        return view('admin.jobs.index', array(
            'questionsType' => $questionsType,
            'departments' => $departments,
            'locations' => $locations,
            'languages' => $languages,

        ));

    }

    /**
     * this is function for display jobs
     * @parama none
     * $jobs return the jobs details for each  5
     **/
    public function show()
    {

        $jobs = jobsModel::orderBy('id', 'desc')->paginate(5);

        return view('admin.jobs.show', array(
            "jobs" => $jobs
        ));

    }

    /**
     * this is function for display responsibilities & requirements of jobs
     * @parama  handle the input
     * return details responsibilities or  requirements depend on request
     **/
    public function details(Request $request)
    {

        $detailsOfArray = [];

        switch ($request->input('model')) {

            case "responsibilities":

                $responsibilities = jobsModel::find($request->input('id'))->responsibilities;

                foreach ($responsibilities as $responsibilitie) {

                    $detailsOfArray[] = $responsibilitie->description;
                }
                break;

            case "requirements":

                $requirements = jobsModel::find($request->input('id'))->requirements;

                foreach ($requirements as $requirement) {

                    $detailsOfArray[] = $requirement->description;

                }
                break;
        }
        return $detailsOfArray;


    }


    /**
     * this is function for store new jobs with all details
     * @parama handel all input failed
     **/
    public function add(Add $request)
    {

        $path = 'uploads/images';

        $imageName = rand(11111111111111, 99999999999999) . '.' . $request->image_file->getClientOriginalExtension();

        $request->image_file->move($path, $imageName);

        $jobs = jobsModel::create([
            "title" => $request->input('title'),
            "summary" => $request->input('summary'),
            "experience" => $request->input('experience'),
            "location_id" => $request->input('locations'),
            "department_id" => $request->input('department'),
            "min_age" => $request->input('min'),
            "max_age" => $request->input('max'),
            "employment_type" => $request->input('employment_type'),
            "number_positions" => $request->input('number_positions'),
            'expiry' => Carbon::createFromFormat('m/d/Y', $request->input('expiry')),
            "salary" => $request->input('salary'),
            "image" => $imageName
        ]);

        foreach ($request->get('requirements') as $key => $value) {
            requirementsModel::create([
                'description' => $value,
                'job_id' => $jobs->id
            ]);
        }

        foreach ($request->get('responsibilities') as $key => $value) {
            responsibilitiesModel::create([
                'description' => $value,
                'job_id' => $jobs->id
            ]);
        }

        foreach ($request->get('lang') as $key => $value) {
            jobLanguageModel::create([
                'language_id' => $value,
                'job_id' => $jobs->id
            ]);
        }

        $answersArray = [];

        $maxNumberOfAnswers = [];

        if (!empty($request->input('questions'))) {

            $answers = $request->input('answers');

            $questions = $request->input('questions');

            $numberOfQuestions = count($questions);

            foreach ($answers as $answer) {

                $answersArray[] = $answer;
            }

            for ($i = 0; $i < $numberOfQuestions; $i++) {

                $maxNumberOfAnswers[] = count($answersArray[$i]);

            }

            $counter = 0;

            foreach ($questions as $question) {

                $questionsModel = new questionsModel;

                $questionsModel->description = $question;

                $questionsModel->max_answer = $maxNumberOfAnswers[$counter];

                $questionsModel->job_id = $jobs->id;

                $questionsModel->save();

                foreach ($answersArray[$counter] as $answerArray) {

                    $answerModel = new answerModel;

                    $answerModel->answer = $answerArray;

                    $answerModel->question_id = $questionsModel->id;

                    $answerModel->save();

                }

                $counter = $counter + 1;
            }

        }
        return redirect()->back();

    }

}
