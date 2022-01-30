@extends('page')

@section('content')
    <section>

        <h2>Welcome To My Portfolio!</h2>

        <h3>About Me In Brief</h3>
        <p>
            Hi I'm Charlie. I enjoy <b>software engineering</b> and also produce music.
        </p>

        <h3>Developing Windows Apps</h3>
        <p>
            I can and do create Windows apps using <b>C#</b>, a language in which I am comfortable.
        </p>

        <h3>Backend Web Dev</h3>
        <p>
            I have created servers using Express.js with TypeScript however when given the option I tend to use
            <b>Laravel</b>.
            I have experience with using MySQL directly but am more comfortable the Laravel ORM Eloquent.
        </p>

        <h3>Frontend Web Dev</h3>
        <p>
            I am confident that I can create whatever you or your designers can come up with. I have experience using
            React however I tend to use Blade, the templating engine included with Laravel.
        </p>

        <h3>Other Software</h3>
        <p>
            Being around computers my whole life has allowed me to be proficient with many different pieces of software.
            I can use databases, spreadsheets and word processors.
            I also have considerable experience with image manipulation software and some experience creating vector
            graphics.
        </p>

        <h3>Work Experience</h3>
        <h4>Mobiloo</h4>
        <p>
            I have been working with the company <a href="https://mobiloo.org.uk" target="_blank">Mobiloo</a> for
            several years building a Laravel app.
            I arrived when the project was underway and have been the sole contributor since then improving both the
            product and the code quality.
        </p>
        <h4>Other</h4>
        <p>
            I have created websites using Squarespace including custom HTML and CSS.
        </p>
    </section>
@endsection

@section('css')
    <x-components.stylesheet name="home" />
@endsection
