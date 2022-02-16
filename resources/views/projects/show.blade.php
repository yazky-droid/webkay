@extends('layouts.main')

@section('content')
<section class="project">
    <div class="project__container flex flex-column align-items-stretch justify-content-around-space">
        <div class="project__header">
            <a href="{{ route('projects.index') }}"><span class="material-icons back-button">keyboard_backspace</span></a>
            <div class="heading__container flex flex-column align-items-flex-start justify-content-flex-start">
                <span class="heading__subtext subtext">project</span>
                <h1 class="section__heading">{{$project->title}}</h1>
            </div>
        </div>
        <div class="project">
            <div class="project__container">
                <img src="{{'../'.$project->image_url }}" class="cool-box-shadow" style=" border-radius:10px; display:block; margin-left: auto; margin-right: auto; maxwidth: 100%; box-shadow:none;">

                <div class="card-flat__content">
                        <h2 style="color:var(--light-blue-color); text-shadow:none;">{{$project->title}}</h2>
                        <span class="card-flat__content__text__paragraph">{{$project->body}}</span>
                </div>


                <div class="project-links flex flex-column align-items-flex-start justify-content-space-around">
                    @forelse ($project->links as $project_link)
                    <div class="project-link flex flex-row justify-content-space-between">
                        <div class="link-name">{{$project_link->link_name}} 👉 </div>
                        <a href="{{$project_link->link_url}}" target="_blank" class="link-link">{{$project_link->link_url}}</a>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
