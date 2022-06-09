{{View:: make('title')}}
{{View:: make('menu')}}

<div class="container py-4 bg-light rounded-5">
{{View:: make('search')}}
    <div class="text-end">
        <button type="button" data-bs-toggle="modal" data-bs-target="#modalAdd" class="btn btn-success me-2 noprint"><i class="bi bi-person-plus"></i></button>
        <button type="button" class="btn btn-warning noprint" onclick="window.print()"><i class="bi bi-printer"></i></button>
    </div>

    <div class="table-responsive">
        @if(count($listofuser))
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Email</th>
                        <th scope="col" >Password</th>
                        <th scope="col" width=150>Created Date</th>
                        <th scope="col" colspan="2" width=210>Updated Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listofuser as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="hidetext">{{ $user->password }}</td>
                        <td>
                            @if($user->created_at)
                            {{ date('D, d F Y',strtotime($user->created_at)) }}
                            @else
                            N/A
                            @endif
                        </td>
                        <td width="150">
                            @if($user->updated_at)
                            {{ date('D, d F Y',strtotime($user->updated_at)) }}
                            @else
                            N/A
                            @endif
                        </td>
                        <td class="noprint" width="60">
                            <a href="/editmyuser?rid={{ $user->id }}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalDelete">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @include('modal.delete')
            @include('modal.adduser')
        </div>
    <div class="pagination">
        <style>
            .h-5 {
                height: 1em;
            }

            .flex {
                text-align: center;
                width: 100%;
            }

            .leading-5 {
                padding: 0.7em;
            }
        </style>
        {{ $listofuser->appends(['search'=> Request::get('search')])->links() }}

        @else
        Record not found
        @endif
    </div>
</div>
{{View:: make('footer')}}