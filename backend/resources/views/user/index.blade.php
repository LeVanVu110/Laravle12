@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Danh sách người dùng</h2>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">+ Thêm User</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mã User</th>
                <th>Tên đăng nhập</th>
                <th>Email</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $u)
            <tr>
                <td>{{ $u->user_id }}</td>
                <td>{{ $u->user_code }}</td>
                <td>{{ $u->user_name }}</td>
                <td>{{ $u->user_email }}</td>
                <td>
                    @if($u->user_is_activated)
                        <span class="badge bg-success">Kích hoạt</span>
                    @else
                        <span class="badge bg-danger">Chưa kích hoạt</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('users.edit', $u->user_id) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <form action="{{ route('users.destroy', $u->user_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Xóa user này?')">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
