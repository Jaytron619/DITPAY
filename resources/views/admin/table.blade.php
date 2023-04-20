
    @php
        $i = 1;
    @endphp
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Service Number</th>
                <th>UN Number</th>
                <th>Surname</th>
                <th>Other Names</th>
                <th>Daily Allowance</th>
                <th>Entertainment Allowance</th>
                <th>Earned Dollar Debit</th>
                <th>Total Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $me => $Rdata)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $Rdata->SvnNo }}</td>
                    <td>{{ $Rdata->UnNo }}</td>
                    <td>{{ $Rdata->Surname }}</td>
                    <td>{{ $Rdata->Othernames }}</td>
                    <td>{{ $Rdata->DailyAllawa }}</td>
                    <td>{{ $Rdata->EntertainmentAllawa }}</td>
                    <td>{{ $Rdata->EarnedDollarDebit }}</td>
                    <td>{{ $Rdata->TotalAmount }}</td>
                    <td>
                        <form action="{{ route('personnel.destroy', $Rdata->id) }}" method="post">
                            <div class='btn-group'>
                                <a href="{{ route('personnel.edit', $Rdata->id) }}" class='btn'><i>Edit</i></a>
                                @csrf
                                @method('Delete')
                                <button class="btndelete " type="submit" name="submit">Delete</button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    {{-- {{ $data->links() }} --}}

