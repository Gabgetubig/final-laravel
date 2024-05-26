<x-app-layout>
    <div class="pagetitle">
        <h1>{{ __('Published') }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>                
                <li class="breadcrumb-item active">{{ __('Resource') }}</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                        <h3>Posts</h3>
                    </div>
                </div>
                @isset($posts)
                    @foreach ($posts as $post)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->subject }}</h5>
                                <p><small><b>Author:</b> {{ $post->user->name }}</small></p>
                                {{ $post->post }}
                                <p class="border-top mt-4 font-monospace">For your feedback you can email the author on <a href="mailto:{{ $post->user->email }}">{{ $post->user->email }}</a></p>
                            </div>
                        </div>
                    @endforeach
                @endisset                
            </div>            
        </section>
</x-app-layout>