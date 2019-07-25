@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <i class="fa fa-smile-o fa-5x" aria-hidden="true"></i>
                    You are logged in!
                </div>

<!-- <div class="container"> <div class="row banner">
 <ion-icon ios="ios-people" md="md-people"></ion-icon>
<div class="col-md-12">
<div class="list-group"> <div class="list-group-item"> <div class="row-action-primary"> <i class="mdi-social-person"></i> </div> <div class="row-content"> <div class="action-secondary"><i class="mdi-social-i\
nfo"></i></div>
<h4 class="list-group-item-heading">Manage User</h4> <a href="/admin/users" class="btn btn-default bt\
n-raised">All Users</a>
</div> </div>
<div class="list-group-separator"></div> <div class="list-group-item"> <div class="row-action-primary"> <i class="mdi-social-group"></i> </div> <div class="row-content"> <div class="action-secondary"><i class="mdi-material\
-info"></i></div>
<h4 class="list-group-item-heading">Manage Roles</h4> <a href="/admin/roles" class="btn btn-default btn-ra\
ised">All Roles</a>
<a href="/admin/roles/create" class="btn btn-primary\ btn-raised">Create A Role</a> </div> </div> <div class="list-group-separator"></div> <div class="list-group-item"> <div class="row-action-primary"> <i class="mdi-editor-border-color"></i> </div> <div class="row-content"> <div class="action-secondary"><i class="mdi-material\ -info"></i></div> <h4 class="list-group-item-heading">Manage Posts</h4> <a href="/admin/posts" class="btn btn-default btn-ra\ ised">All Posts</a> <a href="/admin/posts/create" class="btn btn-primary\ btn-raised">Create A Post</a> </div> </div> <div class="list-group-separator"></div> </div>
</div>
</div> </div> -->







            </div>
        </div>
    </div>
</div>
@endsection
