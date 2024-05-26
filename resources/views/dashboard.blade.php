<x-app-layout>
    <section class="section dashboard">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Number of Posts:</h5>
                        <div class="ps-3">
                            <h6>{{ $totalPosts }}</h6>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Unpublished of Posts:</h5>
                    <div class="ps-3">
                        <h6>{{ $unpublishedPosts }}</h6>
                    </div>
                </div>
            </div>    
        </div>
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Published of Posts:</h5>
                    <div class="ps-3">
                        <h6>{{ $publishedPosts }}</h6>
                    </div>
                </div>
            </div>    
        </div>

        
    </section>
</x-app-layout>
