<?php

namespace App\Http\Controllers;
use App\Models\Mission;

class MissionController extends Controller
{
    public function index()
    {
        $missions = Mission::with(['landing', 'cosmonaut'])->get();

        return response()->json([
            'data' => $missions->map(function ($mission) {
                return [
                    'mission' => [
                        'name' => $mission->name,
                        'launch_details' => [
                            'launch_date' => $mission->launch_date,
                            'launch_site' => [
                                'name' => $mission->launch_site,
                                'location' => [
                                    'latitude' => $mission->latitude,
                                    'longitude' => $mission->longitude,
                                ],
                            ],
                        ],
                        'flight_duration' => [
                            'hours' => $mission->duration_hours,
                            'minutes' => $mission->duration_minutes,
                        ],
                        'spacecraft' => [
                            'name' => $mission->spacecraft_name,
                            'manufacturer' => $mission->manufacturer,
                            'crew_capacity' => $mission->crew_capacity,
                        ],
                    ],
                   'landing' => [
                    'date' => $mission->landing->date,
                    'site' => [
                        'name' => $mission->landing->site_name,
                        'country' => $mission->landing->country,
                        'coordinates' => [
                            'latitude' => $mission->landing->latitude,
                            'longitude' => $mission->landing->longitude
                        ]
                    ],
                    'details' => [
                        'parachute_landing' => $mission->landing->parachute_landing,
                        'impact_velocity_mps' => $mission->landing->impact_velocity_mps
                    ]
                ],
                'cosmonaut' => [
                    'name' => $mission->cosmonaut->name,
                    'birthdate' => $mission->cosmonaut->birthdate,
                    'rank' => $mission->cosmonaut->rank,
                    'bio' => [
                        'early_life' => $mission->cosmonaut->early_life,
                        'career' => $mission->cosmonaut->career,
                        'post_flight' => $mission->cosmonaut->post_flight
                    ]
                ]
                ];
            }),
        ]);
    }
}
