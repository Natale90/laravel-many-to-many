@extends('layouts.main-layout')

@section('sectionHome')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>
                    Welcome Home Boy
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <ul >
                    @foreach ($posts as $post)
                        <li class="border">

                            <strong>
                                Post Title:
                            </strong> <br>
                            {{ $post -> title }}

                        </li>


                        <p>
                            <strong>
                                Post Content:
                            </strong> <br>
                            {{ $post -> text }}
                        </p>

                        <p>
                            <strong>
                                Comments: {{ $post -> comments -> count() }}
                            </strong>
                        </p>
                        <p>
                            <small>
                                @foreach ($post -> comments as $comment)
                                    <li>
                                        {{ $comment -> text }}
                                    </li>
                                @endforeach
                            </small>
                        </p>

                        likes: {{ $post -> users -> count() }}
                        <ul>
                            @foreach ($post -> users as $user)
                                <li>
                                    {{ $user -> name }}
                                </li>
                            @endforeach
                        </ul>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
@endsection
