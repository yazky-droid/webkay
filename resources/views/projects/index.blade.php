@extends('layouts.main')

@section('content')
<section class="projects">
    <div class="projects-overlay overlay cool-overlay-right-aligned"></div>
        <div class="project__container ">
            <div class="projects__heading">
                <div class="heading__container flex flex-column align-items-flex-start justify-content-flex-start">
                    <span class="heading__subtext subtext">For now, just it. But I'll Improve it soon~</span>
                    <h1 class="section__heading">This is what i've done</h1>
                    <h1 class="section__heading" style="position:absolute; top:60%; right:75px; padding:20px 10px;">Please scroll down 👇</h1>
                </div>
            </div>
        </div> {{-- // end of project__container --}}

    </section>

    <section class="projects">
        <div class="projects__heading">
            <div class="projects__container flex flex-column align-items-stretch justify-content-space-around">
            <div class="heading__container flex flex-column align-items-flex-start justify-content-flex-start">
                <span class="heading__subtext subtext">Check these out</span>
                <h1 class="section__heading">All Projects</h1>

            <div class="projects__cards">
              <div class="projects__cards__container">
                @forelse ($projects as $project)
                    <a href="{{ route('projects.show',['id'=>$project->id]) }}">
                        <div class="projects__card flex flex-column align-items-flex-start justify-content-flex-start">
                            <img src="{{'../'.$project->image_url }}" alt="project" class="cool-box-shadow">
                            <h3 style="color: var(--light-color); text-shadow:var(--dark-color) -0.2rem 0.2rem 0.1rem;">{{ $project->title }}</h3>
                            <span>{{ $project->excerpt }}</span>
                        </div>
                    </a>
                @empty
                    <h1 class="section__heading">There is nothing To show. i'm sorry</h1>
                @endforelse
            </div>
        </div>
        <br/>
        <br/>
        <div class="projects__container flex flex-column align-items-stretch justify-content-flex-end">
            <h1 class="section__heading">Thank You for Visiting my website</h1>
        </div>
    </section>
@endsection
