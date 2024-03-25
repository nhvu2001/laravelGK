<!-- resources/views/employees/index.blade.php -->

<h1>Danh sách nhân viên</h1>

<table>
    <thead>
    <tr>
        <th>Mã nhân viên</th>
        <th>Tên nhân viên</th>
        <th>Phai</th>
        <th>Nơi sinh</th>
        <th>Ma_Phong</th>
        <th>Luong</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->Ma_NV }}</td>
            <td>{{ $employee->Ten_NV}}</td>
            <td>
                @if ($employee->Phai == 'Nam')
                    <img src="{{ asset('man.jpg') }}" alt="Nam" width="50">
                @else
                    <img src="{{ asset('woman.jpg') }}" alt="Nữ" width="50">
                @endif
            </td>
            <td>{{ $employee->Noi_Sinh}}</td>
            <td>{{ $employee->Ma_Phong}}</td>
            <td>{{ $employee->Luong}}</td>

        </tr>
    @endforeach
    </tbody>
</table>

{{ $employees->links() }}
