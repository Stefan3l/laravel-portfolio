@extends('layouts.app')

@section('content')
   <div class="container py-4">
        <h2 class="text-center fs-5"> Benvenuto {{ Auth::user()->name }}</h2>
        <h1 class="text-center"> La tua area admin</h1>
        <div class="mt-5"> 
            <h2 class="mb-3">My skills</h2>
            <div class="skills-container">
                <div class="skill-item mb-3">
                    <div class="d-flex justify-content-between">
                        <span class="fw-bold">Laravel</span>
                        <span>85%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="skill-item mb-3">
                    <div class="d-flex justify-content-between">
                        <span class="fw-bold">PHP</span>
                        <span>80%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="skill-item mb-3">
                    <div class="d-flex justify-content-between">
                        <span class="fw-bold">HTML</span>
                        <span>90%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="skill-item mb-3">
                    <div class="d-flex justify-content-between">
                        <span class="fw-bold">CSS</span>
                        <span>75%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="skill-item mb-3">
                    <div class="d-flex justify-content-between">
                        <span class="fw-bold">JavaScript</span>
                        <span>70%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="skill-item mb-3">
                    <div class="d-flex justify-content-between">
                        <span class="fw-bold">Bootstrap</span>
                        <span>85%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="skill-item mb-3">
                    <div class="d-flex justify-content-between">
                        <span class="fw-bold">ReactJs</span>
                        <span>85%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection