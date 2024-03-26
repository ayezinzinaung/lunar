@extends('backend.layouts.app')
@section('title','Admin User' )
@section('profile-active','mm-active')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-user icon-gradient bg-mean-fruit"></i>
            </div>
            <div>Admin User</div>
        </div>
    </div>
</div>
<div class="pt-3">
    <a href="{{ route('admin.profile.create') }}" class="btn btn-primary">
        <i class="fas fa-plus-circle"></i>
        Add Admin Users
    </a>
 </div>
<section class="content pb-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card tablePage">
                <div class="card-body">
                    <table class="table table-bordered User_tb" style="width:100%;">
                        <thead>
                            <tr class="bg-light-blue">
                                <th></th>
                                <th class="text-center no-sort" style="width: 17%;">Name</th>
                                <th class="text-center no-sort" style="width: 17%;">Phone</th>
                                <th class="text-center no-sort" style="width: 17%;">NRC Number</th>
                                <th class="text-center" style="width: 17%;">Created at</th>
                                <th class="text-center" style="width: 17%;">Updated at</th>
                                <th class="text-center no-sort" style="width: 15%;">Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var table = $(".User_tb").DataTable({
                processing: true,
                serverSice: true,
                dom: 'Bfrtip',
                buttons:[
                    {
                        extend: 'refresh'
                    },
                    {
                        extend: 'pageLength'
                    }
                ],
                lengthMenu: [
                    [10, 25, 50, 100],
                    ['10 rows', '25 rows', '50 rows', '100 rows']
                ],
                ajax: '/admin/profile/datatables/ssd',
                columns: [
                    {
                        data: "plus-icon",
                        name: "plus-icon",
                        defaultContent: null
                    },
                    {
                        data: "name",
                        name: "name",
                        defaultContent: "-",
                        class: "text-center"
                    },
                    {
                        data: "phone",
                        name: "phone",
                        defaultContent: "-",
                        class: "text-center"
                    },
                    {
                        data: "nrc_no",
                        name: "nrc_no",
                        defaultContent: "-",
                        class: "text-center"
                    },
                    {
                        data: "created_at",
                        name: "created_at",
                        defaultContent: "-",
                        class: "text-center"
                    },
                    {
                        data: "updated_at",
                        name: "updated_at",
                        defaultContent: "-",
                        class: "text-center"
                    },
                    {
                        data: "action",
                        name: "action",
                        class: "text-center"
                    },
                ],
                order: [
                    [5, "desc"]
                ],
                responsive: {
                    details: {
                        type: "column",
                        target: 0
                    }
                },
                columnDefs: [
                    {
                        targets: "no-sort",
                        orderable: false
                    },
                    {
                        className: "control",
                        orderable: false,
                        targets: 0
                    },
                    {
                        targets: "hidden",
                        visible: false
                    }
                ],

            })
        })
    </script>
@endsection