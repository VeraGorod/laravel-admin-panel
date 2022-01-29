@extends("layouts.app_admin")

@section("content")
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Панель упраления @endslot
            @slot('parent') Главная @endslot
            @slot('active')  @endslot
        @endcomponent
    </section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Dashboard admin
                    </div>
                    <div class="card-body">
                        Admin
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection