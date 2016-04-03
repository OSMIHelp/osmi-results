<?php

namespace App\Http\Controllers;

use App\Result;
use App\Http\Requests;
use League\Csv\Reader;
use Illuminate\Http\Request;


class ResultsController extends Controller
{
    protected $result;

    public function __construct(Result $result)
    {
        $this->result = $result;

        if (!ini_get("auto_detect_line_endings")) {
            ini_set("auto_detect_line_endings", '1');
        }
    }

    public function showQuestions()
    {
        $reader = Reader::createFromPath(storage_path() . '/../osmi-tech-survey-2016-report-20160402.csv');
        foreach ($reader as $index => $row) {
            dd($row);
        }
    }

    public function importResults()
    {
        $reader = Reader::createFromPath(storage_path() . '/../osmi-tech-survey-2016-report-20160402.csv');
        foreach ($reader as $index => $row) {
            if ($index != 0)
            {
                $this->result->create($row);
            }
        }
    }

    public function queryResults()
    {
//        $data['Are you self-employed?'] = $this->getSelfEmployed();
//        $data['How many employees does your company or organization have?'] = $this->numberOfEmployees();
//        $data['Is your primary role within your company related to tech/IT?'] = $this->yourPrimaryRole();
        $data['employer_provides_mental_health_benefits'] = $this->employerProvidesMentalHealth();
        $data['number_of_employeers'] = $this->numberOfEmployees();
        $data['highlight_one'] = $this->peopleInUsDontKnowIfTheyHaveCoverageButHaveBeenOrSuspectMentalCondition();
        $data['highlight_two'] = $this->peopleWhoHaveMHIssueThatHaveNotSoughtTreatment();

        return view('results.index', $data);
    }

    // people in the US, don't know if they have mental health care coverage, but have been or suspect they have a mental health condition
    public function peopleInUsDontKnowIfTheyHaveCoverageButHaveBeenOrSuspectMentalCondition()
    {
//        $results['Query'] = 'people in the US, don\'t know if they have mental health care coverage, but have been or suspect they have a mental health condition';

        $count = $this->result
            ->where('5', 'I don\'t know') // don't know if they have MH coverage
            ->where('94', 'United States of America') // In US
            ->where(function ($query) {
                $query->where('47', 'Yes')
                    ->orWhere('47', 'Maybe');
            })
            ->count();
        $people = $this->result->where('94', 'United States of America')->count();
        $percent = ($count / $people) * 100;
        $results['United States of America']['all_from_country'] = $people;
        $results['United States of America']['matched_query'] = $count;
        $results['United States of America']['percent'] = number_format($percent, 2) .  '%';

        $count = $this->result
            ->where('5', 'I don\'t know') // don't know if they have MH coverage
            ->where('94', 'United Kingdom') // In United Kingdom
            ->where(function ($query) {
                $query->where('47', 'Yes')
                    ->orWhere('47', 'Maybe');
            })
            ->count();
        $people = $this->result->where('94', 'United Kingdom')->count();
        $percent = ($count / $people) * 100;
        $results['United Kingdom']['all_from_country'] = $people;
        $results['United Kingdom']['matched_query'] = $count;
        $results['United Kingdom']['percent'] = number_format($percent, 2) .  '%';

        $count = $this->result
            ->where('5', 'I don\'t know') // don't know if they have MH coverage
            ->where('94', 'Canada') // In Canada
            ->where(function ($query) {
                $query->where('47', 'Yes')
                    ->orWhere('47', 'Maybe');
            })
            ->count();
        $people = $this->result->where('94', 'Canada')->count();
        $percent = ($count / $people) * 100;
        $results['Canada']['all_from_country'] = $people;
        $results['Canada']['matched_query'] = $count;
        $results['Canada']['percent'] = number_format($percent, 2) .  '%';

        $count = $this->result
            ->where('5', 'I don\'t know') // don't know if they have MH coverage
            ->where('94', 'Australia') // In Australia
            ->where(function ($query) {
                $query->where('47', 'Yes')
                    ->orWhere('47', 'Maybe');
            })
            ->count();
        $people = $this->result->where('94', 'Australia')->count();
        $percent = ($count / $people) * 100;
        $results['Australia']['all_from_country'] = $people;
        $results['Australia']['matched_query'] = $count;
        $results['Australia']['percent'] = number_format($percent, 2) .  '%';

        return $results;
    }

    public function getSelfEmployed()
    {
        $results['All']['Yes'] = $this->result->where('1', 1)->count();
        $results['All']['No'] = $this->result->where('1', 0)->count();

        $results['United States of America']['Yes'] = $this->result->where('1', 1)->where('94', 'United States of America')->count();
        $results['United States of America']['No'] = $this->result->where('1', 0)->where('94', 'United States of America')->count();

        $results['United Kingdom']['Yes'] = $this->result->where('1', 1)->where('94', 'United Kingdom')->count();
        $results['United Kingdom']['No'] = $this->result->where('1', 0)->where('94', 'United Kingdom')->count();

        $results['Canada']['Yes'] = $this->result->where('1', 1)->where('94', 'Canada')->count();
        $results['Canada']['No'] = $this->result->where('1', 0)->where('94', 'Canada')->count();

        $results['Australia']['Yes'] = $this->result->where('1', 1)->where('94', 'Australia')->count();
        $results['Australia']['No'] = $this->result->where('1', 0)->where('94', 'Australia')->count();

        return $results;
    }

    // How many employees does your company or organization have
    public function numberOfEmployees()
    {
        $results['All']['More than 1000'] = $this->result->where('2', 'More than 1000')->count();
        $results['All']['500-1000'] = $this->result->where('2', '500-1000')->count();
        $results['All']['100-500'] = $this->result->where('2', '100-500')->count();
        $results['All']['26-100'] = $this->result->where('2', '26-100')->count();
        $results['All']['6-25'] = $this->result->where('2', '6-25')->count();
        $results['All']['1-5'] = $this->result->where('2', '1-5')->count();
        $results['All']['No Answer'] = $this->result->where('2', '')->count();

        $results['United States of America']['More than 1000'] = $this->result->where('2', 'More than 1000')->where('94', 'United States of America')->count();
        $results['United States of America']['500-1000'] = $this->result->where('2', '500-1000')->where('94', 'United States of America')->count();
        $results['United States of America']['100-500'] = $this->result->where('2', '100-500')->where('94', 'United States of America')->count();
        $results['United States of America']['26-100'] = $this->result->where('2', '26-100')->where('94', 'United States of America')->count();
        $results['United States of America']['6-25'] = $this->result->where('2', '6-25')->where('94', 'United States of America')->count();
        $results['United States of America']['1-5'] = $this->result->where('2', '1-5')->where('94', 'United States of America')->count();
        $results['United States of America']['No Answer'] = $this->result->where('2', '')->where('94', 'United States of America')->count();

        $results['United Kingdom']['More than 1000'] = $this->result->where('2', 'More than 1000')->where('94', 'United Kingdom')->count();
        $results['United Kingdom']['500-1000'] = $this->result->where('2', '500-1000')->where('94', 'United Kingdom')->count();
        $results['United Kingdom']['100-500'] = $this->result->where('2', '100-500')->where('94', 'United Kingdom')->count();
        $results['United Kingdom']['26-100'] = $this->result->where('2', '26-100')->where('94', 'United Kingdom')->count();
        $results['United Kingdom']['6-25'] = $this->result->where('2', '6-25')->where('94', 'United Kingdom')->count();
        $results['United Kingdom']['1-5'] = $this->result->where('2', '1-5')->where('94', 'United Kingdom')->count();
        $results['United Kingdom']['No Answer'] = $this->result->where('2', '')->where('94', 'United Kingdom')->count();

        $results['Canada']['More than 1000'] = $this->result->where('2', 'More than 1000')->where('94', 'Canada')->count();
        $results['Canada']['500-1000'] = $this->result->where('2', '500-1000')->where('94', 'Canada')->count();
        $results['Canada']['100-500'] = $this->result->where('2', '100-500')->where('94', 'Canada')->count();
        $results['Canada']['26-100'] = $this->result->where('2', '26-100')->where('94', 'Canada')->count();
        $results['Canada']['6-25'] = $this->result->where('2', '6-25')->where('94', 'Canada')->count();
        $results['Canada']['1-5'] = $this->result->where('2', '1-5')->where('94', 'Canada')->count();
        $results['Canada']['No Answer'] = $this->result->where('2', '')->where('94', 'Canada')->count();

        $results['Australia']['More than 1000'] = $this->result->where('2', 'More than 1000')->where('94', 'Australia')->count();
        $results['Australia']['500-1000'] = $this->result->where('2', '500-1000')->where('94', 'Australia')->count();
        $results['Australia']['100-500'] = $this->result->where('2', '100-500')->where('94', 'Australia')->count();
        $results['Australia']['26-100'] = $this->result->where('2', '26-100')->where('94', 'Australia')->count();
        $results['Australia']['6-25'] = $this->result->where('2', '6-25')->where('94', 'Australia')->count();
        $results['Australia']['1-5'] = $this->result->where('2', '1-5')->where('94', 'Australia')->count();
        $results['Australia']['No Answer'] = $this->result->where('2', '')->where('94', 'Australia')->count();

        return $results;
    }

    // Is your employer primarily a tech company/organization
    public function employerPrimarilyTech()
    {
        $results['All']['Yes'] = $this->result->where('3', '1')->count();
        $results['All']['No'] = $this->result->where('3', '0')->count();
        $results['All']['No Answer'] = $this->result->where('3', '')->count();

        $results['United Kingdom']['Yes'] = $this->result->where('3', '1')->where('94', 'United Kingdom')->count();
        $results['United Kingdom']['No'] = $this->result->where('3', '0')->where('94', 'United Kingdom')->count();
        $results['United Kingdom']['No Answer'] = $this->result->where('3', '')->where('94', 'United Kingdom')->count();

        $results['United States of America']['Yes'] = $this->result->where('3', '1')->where('94', 'United States of America')->count();
        $results['United States of America']['No'] = $this->result->where('3', '0')->where('94', 'United States of America')->count();
        $results['United States of America']['No Answer'] = $this->result->where('3', '')->where('94', 'United States of America')->count();

        $results['Canada']['Yes'] = $this->result->where('3', '1')->where('94', 'Canada')->count();
        $results['Canada']['No'] = $this->result->where('3', '0')->where('94', 'Canada')->count();
        $results['Canada']['No Answer'] = $this->result->where('3', '')->where('94', 'Canada')->count();

        $results['Australia']['Yes'] = $this->result->where('3', '1')->where('94', 'Canada')->count();
        $results['Australia']['No'] = $this->result->where('3', '0')->where('94', 'Canada')->count();
        $results['Australia']['No Answer'] = $this->result->where('3', '')->where('94', 'Canada')->count();

        return $results;
    }


    // Is your primary role within your company related to tech/IT
    public function yourPrimaryRole()
    {
        $results['All']['Yes'] = $this->result->where('4', '1')->count();
        $results['All']['No'] = $this->result->where('4', '0')->count();
        $results['All']['No Answer'] = $this->result->where('4', '')->count();

        $results['United Kingdom']['Yes'] = $this->result->where('4', '1')->where('94', 'United Kingdom')->count();
        $results['United Kingdom']['No'] = $this->result->where('4', '0')->where('94', 'United Kingdom')->count();
        $results['United Kingdom']['No Answer'] = $this->result->where('4', '')->where('94', 'United Kingdom')->count();

        $results['United States of America']['Yes'] = $this->result->where('4', '1')->where('94', 'United States of America')->count();
        $results['United States of America']['No'] = $this->result->where('4', '0')->where('94', 'United States of America')->count();
        $results['United States of America']['No Answer'] = $this->result->where('4', '')->where('94', 'United States of America')->count();

        $results['Canada']['Yes'] = $this->result->where('4', '1')->where('94', 'Canada')->count();
        $results['Canada']['No'] = $this->result->where('4', '0')->where('94', 'Canada')->count();
        $results['Canada']['No Answer'] = $this->result->where('4', '')->where('94', 'Canada')->count();

        $results['Australia']['Yes'] = $this->result->where('4', '1')->where('94', 'Canada')->count();
        $results['Australia']['No'] = $this->result->where('4', '0')->where('94', 'Canada')->count();
        $results['Australia']['No Answer'] = $this->result->where('4', '')->where('94', 'Canada')->count();

        return $results;
    }

    public function _employerProvidesMentalHealthByCountry($country)
    {
        $yes = $this->result->where('5', 'Yes')->where('94', $country)->count();
        $dont_know = $this->result->where('5', 'I don\'t know')->where('94', $country)->count();
        $no = $this->result->where('5', 'No')->where('94', $country)->count();
        $na = $this->result->where('5', 'Not eligible for coverage / N/A')->where('94', $country)->count();
        $responses = $yes + $dont_know + $no + $na;

        $results['Yes'] = $yes . ' (' . number_format(($yes / $responses) * 100, 2) . '%)';
        $results['Don\'t Know'] = $dont_know . ' (' . number_format(($dont_know / $responses) * 100, 2) . '%)';
        $results['No'] = $no . ' (' . number_format(($no / $responses) * 100, 2) . '%)';
        $results['Not eligible for coverage / N/A'] = $na . ' (' . number_format(($na / $responses) * 100, 2) . '%)';

        return $results;
    }
    // Does your employer provide mental health benefits as part of healthcare coverage
    public function employerProvidesMentalHealth()
    {
        $yes = $this->result->where('5', 'Yes')->count();
        $dont_know = $this->result->where('5', 'I don\'t know')->count();
        $no = $this->result->where('5', 'No')->count();
        $na = $this->result->where('5', 'Not eligible for coverage / N/A')->count();
        $responses = $yes + $dont_know + $no + $na;

        $results['All']['Yes'] = $yes . ' (' . number_format(($yes / $responses) * 100, 2) . '%)';
        $results['All']['Don\'t Know'] = $dont_know . ' (' . number_format(($dont_know / $responses) * 100, 2) . '%)';
        $results['All']['No'] = $no . ' (' . number_format(($no / $responses) * 100, 2) . '%)';
        $results['All']['Not eligible for coverage / N/A'] = $na . ' (' . number_format(($na / $responses) * 100, 2) . '%)';

        $results['United States of America'] = $this->_employerProvidesMentalHealthByCountry('United States of America');
        $results['United Kingdom'] = $this->_employerProvidesMentalHealthByCountry('United Kingdom');
        $results['Canada'] = $this->_employerProvidesMentalHealthByCountry('Canada');
        $results['Australia'] = $this->_employerProvidesMentalHealthByCountry('Australia');

        return $results;
    }
    // People who think they have a mental health issue but have not sought treatment
    public function peopleWhoHaveMHIssueThatHaveNotSoughtTreatment()
    {
//        $results['Query'] = 'People who have Mental Health Issue That Have Not Sought Treatment';

        $count = $this->result
            ->where('94', 'United States of America') // In US
            ->where('89', '0') // Not Sought Treatment
            ->where(function ($query) {
                $query->where('48', 'Yes')
                    ->orWhere('48', 'Maybe');
            })
            ->count();
        $people = $this->result->where('94', 'United States of America')->count();
        $percent = ($count / $people) * 100;
        $results['United States of America']['all_from_country'] = $people;
        $results['United States of America']['matched_query'] = $count;
        $results['United States of America']['percent'] = number_format($percent, 2) .  '%';

        $count = $this->result
            ->where('94', 'United Kingdom') // In US
            ->where('89', '0') // Not Sought Treatment
            ->where(function ($query) {
                $query->where('48', 'Yes')
                    ->orWhere('48', 'Maybe');
            })
            ->count();
        $people = $this->result->where('94', 'United Kingdom')->count();
        $percent = ($count / $people) * 100;
        $results['United Kingdom']['all_from_country'] = $people;
        $results['United Kingdom']['matched_query'] = $count;
        $results['United Kingdom']['percent'] = number_format($percent, 2) .  '%';

        $count = $this->result
            ->where('94', 'Canada') // In US
            ->where('89', '0') // Not Sought Treatment
            ->where(function ($query) {
                $query->where('48', 'Yes')
                    ->orWhere('48', 'Maybe');
            })
            ->count();
        $people = $this->result->where('94', 'Canada')->count();
        $percent = ($count / $people) * 100;
        $results['Canada']['all_from_country'] = $people;
        $results['Canada']['matched_query'] = $count;
        $results['Canada']['percent'] = number_format($percent, 2) .  '%';

        $count = $this->result
            ->where('94', 'Australia') // In US
            ->where('89', '0') // Not Sought Treatment
            ->where(function ($query) {
                $query->where('48', 'Yes')
                    ->orWhere('48', 'Maybe');
            })
            ->count();
        $people = $this->result->where('94', 'Australia')->count();
        $percent = ($count / $people) * 100;
        $results['Australia']['all_from_country'] = $people;
        $results['Australia']['matched_query'] = $count;
        $results['Australia']['percent'] = number_format($percent, 2) .  '%';

        return $results;
    }
    
}
