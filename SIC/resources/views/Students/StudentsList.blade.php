<h1>Lista de estudiantes</h1>
<table border="2">
    @foreach ($students as $student)
    <tr>
        <td>
            {{$student->id_student}}
        </td>
        <td>
            {{ $student->name_student }}
        </td>
        <td>
            {{ $student->lastname_student }}
        </td>
    </tr>
    @endforeach
</table>
