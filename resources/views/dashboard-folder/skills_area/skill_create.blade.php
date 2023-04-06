@extends('master-page.dashboard_master')

@section('title_bar')
    Skills Area
@endsection

@section('main_content')
    {{-- design skill create --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h2>Design Skill Create</h2>
                </div>
                <div class="card-body">
                    @if(session('success_design_s_message'))
                        <div class="alert alert-success">
                            {{session('success_design_s_message')}}
                        </div>
                    @endif
                    <form action="{{ route('design_skills.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Skill Name</label>
                                    <input type="text" name="skill_name" class="@error('skill_name') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('skill_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Skill Percentage</label>
                                    <div class="range-wrap">
                                        <input type="range" name="skill_percentage" class="range">
                                        <output class="bubble"></output>
                                        @error('skill_percentage')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- develop skill create --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h2>Develop Skill Create</h2>
                </div>
                <div class="card-body">
                    @if(session('success_develop_s_message'))
                        <div class="alert alert-success">
                            {{session('success_develop_s_message')}}
                        </div>
                    @endif
                    <form action="{{ route('develop_skills.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Skill Name</label>
                                    <input type="text" name="skill_name" class="@error('skill_name') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('skill_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Skill Percentage</label>
                                    <div class="range-wrap">
                                        <input type="range" name="skill_percentage" class="range">
                                        <output class="bubble"></output>
                                        @error('skill_percentage')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('dashboard_js_code')
    <script>
        //  percentage range value bubbles code start here
         const allRanges = document.querySelectorAll(".range-wrap");
        allRanges.forEach(wrap => {
        const range = wrap.querySelector(".range");
        const bubble = wrap.querySelector(".bubble");

        range.addEventListener("input", () => {
            setBubble(range, bubble);
        });
        setBubble(range, bubble);
        });

        function setBubble(range, bubble) {
        const val = range.value;
        const min = range.min ? range.min : 0;
        const max = range.max ? range.max : 100;
        const newVal = Number(((val - min) * 100) / (max - min));
        bubble.innerHTML = val;

        // Sorta magic numbers based on size of the native UI thumb
        bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
        }
        //  percentage range value bubbles code start here
    </script>
@endsection
