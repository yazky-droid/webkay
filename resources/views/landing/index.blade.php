@extends('layouts.main')

@section('content')
<section class="landing-banner">
    <div class="landing-banner__container flex flex-column align-items-center justify-content-space-between">
        <div class="landing-banner__profile flex flex-column align-items-center">
            <img src="images/yazky.jpg" alt="profile" class="profile-image">
            <p>Holla, Fellas!</p>
            <span>It's your boy Yazky here !</span>
        </div>

        <div class="landing-banner__banner">
            <div class="landing-banner__banner__banner-text">
                Serve the APIs for Frontend
            </div>
        </div>

        <a href="/resume.pdf" class="download-button flex flex-row align-items-center justify-content-space-between" target="_blank">
        <span>Resume </span>
        <span class="material-icons">launch</span>
        </a>
    </div>
{{-- ini untuk animasi panah kebawah
        <div class="landing-banner__scroll-down">
            <span class="material-icons">keyboard_arrow_down</span>
        </div> --}}
</section>
<section class="skills">
    <div class="skills-overlay overlay cool-overlay-right-aligned"></div>
    <div class="skills__container flex flex-column align-items-stretch justify-content-space-around">
        <div class="skills__header">
            <div class="heading__container flex flex-column align-items-flex-start justify-content-flex-start">
                <span class="heading__subtext subtext">Nice To Know U Asshole</span>
                <h1 class="section__heading">Areas of ALL MY SINS</h1>
            </div>
        </div>

        <div class="skills__cards">
            <div class="skills__cards__container flex flex-row justify-content-space-around align-items: center">
                <div class="skills__card card flex flex-column align-items-center justify-content-space-around">
                    <img src="https://img.icons8.com/fluent/80/000000/laravel.png"/>
                    <span class="card__info flex flex-column align-items-center">
                        <h3>Laravel</h6>
                        <span style="text-align:center;line-height:1;">I'm in love with Laravel</span>
                    </span>
                </div>

                <div class="skills__card card flex flex-column align-items-center justify-content-space-around">
                    <img src="https://img.icons8.com/officel/80/000000/react.png"/>
                    <span class="card__info flex flex-column align-items-center">
                        <h3>React</h6>
                        <span style="text-align:center; line-height:1;">I want to know more about React</span>
                    </span>
                </div>
                <div class="skills__card card flex flex-column align-items-center justify-content-space-around">
                    <img src="https://img.icons8.com/officel/80/000000/sql.png" alt="sql">
                    <span class="card__info flex flex-column align-items-center">
                        <h3>SQL</h6>
                        <span style="text-align:center; line-height:1;">Database ?I usually use MySQL or PostgreSQL.</span>
                    </span>
                </div>
            </div>
            {{--  // end of skills__cards --}}
        </div>
        {{-- // end of skills__container --}}
    </div>
    {{-- // end of skills --}}
</section>

<section class="projects">
    <div class="projects-overlay overlay cool-overlay-left-aligned"></div>
    <div class="projects__container flex flex-column align-items-stretch justify-content-space-around">
        <div class="project__heading">
            <div class="heading__container flex flex-column align-items-flex-end justify-content-flex-start">
                <span class="heading__subtext subtext">Please check it !</span>
                <h1 class="section__heading">What I Ever Build</h1>
            </div>
        </div>

        <div class="projects__cards">
            <div class="projects__cards__container">
                @forelse ($projects as $project)
                <a href="{{ route('projects.show',['id'=>$project->id]) }}">
                  <div class="projects__card flex flex-column align-items-flex-start justify-content-flex-start">
                        <img src="{{ $project->image_url }}" alt="project" class="cool-box-shadow">
                        <h3>{{ $project->title }}</h3>
                        <span>{{ $project->excerpt }}</span>
                </div>
            </a>
                @empty
                <h1 class="section__heading">Jancok kok KOSONG SAT</h1>
                @endforelse
            </div>
        </div>

        <div class="projects-cta__container flex flex-row justify-content-center align-items-center">
            <a href="projects/index" class="projects-cta see-more">See All</a>
        </div>
    </div>
</section>
@endsection
