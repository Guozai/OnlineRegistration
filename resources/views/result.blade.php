@extends('layouts.resultmain')
@section('title', '本周战况')
@section('content')
    <div class="tournament"></div>

    <script>
        var singleElimination = {
            "teams": [
                ["{{ $results[0]->team->team_name}}", "{{ $results[1]->team->team_name}}"],
                ["{{ $results[2]->team->team_name}}", "{{ $results[3]->team->team_name}}"],
                ["{{ $results[4]->team->team_name}}", "{{ $results[5]->team->team_name}}"],
                ["{{ $results[6]->team->team_name}}", "{{ $results[7]->team->team_name}}"]
            ],
            "results": [            // List of brackets (single elimination, so only one bracket)
                [                     // List of rounds in bracket
                    [                   // First round in this bracket
                        [{{ $results[0]->round1_score}}, {{ $results[1]->round1_score}}],           // Team 1 vs Team 2
                        [{{ $results[2]->round1_score}}, {{ $results[3]->round1_score}}],           // Team 3 vs Team 4
                        [{{ $results[4]->round1_score}}, {{ $results[5]->round1_score}}],
                        [{{ $results[6]->round1_score}}, {{ $results[7]->round1_score}}]
                    ],
                    [                   // Second (final) round in single elimination bracket
                        [
                            @if ($results[0]->round2_score !== null)
                                {{ $results[0]->round2_score }}
                            @else
                                {{ $results[1]->round2_score }}
                            @endif
                            ,
                            @if ($results[2]->round2_score !== null)
                                {{ $results[2]->round2_score }}
                            @else
                                {{ $results[3]->round2_score }}
                            @endif
                        ],           // Match for first place
                        [
                            @if ($results[4]->round2_score !== null)
                                {{ $results[4]->round2_score}}
                            @else
                                {{ $results[5]->round2_score }}
                            @endif
                            ,
                            @if ($results[6]->round1_score !== null)
                                {{ $results[6]->round2_score }}
                            @else
                                {{ $results[7]->round2_score }}
                            @endif
                        ]            // Match for 3rd place
                    ],
                    [                   // Third (final) round in single elimination bracket
                        [
                            @if ($results[0]->round3_score !== null)
                            {{ $results[0]->round3_score }}
                            @elseif ($results[1]->round3_score !== null)
                            {{ $results[1]->round3_score }}
                            @elseif ($results[2]->round3_score !== null)
                            {{ $results[2]->round3_score }}
                            @else
                            {{ $results[3]->round3_score }}
                            @endif
                            ,
                            @if ($results[4]->round3_score !== null)
                            {{ $results[4]->round3_score }}
                            @elseif ($results[5]->round3_score !== null)
                            {{ $results[5]->round3_score }}
                            @elseif ($results[6]->round3_score !== null)
                            {{ $results[6]->round3_score }}
                            @else
                            {{ $results[7]->round3_score }}
                            @endif
                        ],           // Match for first place
                        [
                            @if ($results[0]->round4_score !== null)
                            {{ $results[0]->round4_score }}
                            @elseif ($results[1]->round4_score !== null)
                            {{ $results[1]->round4_score }}
                            @elseif ($results[2]->round4_score !== null)
                            {{ $results[2]->round4_score }}
                            @else
                            {{ $results[3]->round4_score }}
                            @endif
                            ,
                            @if ($results[4]->round4_score !== null)
                            {{ $results[4]->round4_score }}
                            @elseif ($results[5]->round4_score !== null)
                            {{ $results[5]->round4_score }}
                            @elseif ($results[6]->round4_score !== null)
                            {{ $results[6]->round4_score }}
                            @else
                            {{ $results[7]->round4_score }}
                            @endif
                        ]            // Match for 3rd place
                    ]
                ]
            ]
        }

        $('.tournament').bracket({
            init: singleElimination
        });
    </script>
@endsection
