@include('partials.header', ['title' => 'Students'])
<div class="max-w-lg mx-auto pt-24">
    <a href="#">Student List</a>
</div>
<section class="mt-24">
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        First Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Last Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Age
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr class="bg-slate-900 text-white border-b-4">
                    <td class="py-4 px-6">
                        {{$student['first_name']}}
                    </td>
                    <td class="py-4 px-6">
                        {{$student['last_name']}}
                    </td>
                    <td class="py-4 px-6">
                        {{$student['email']}}
                    </td>
                    <td class="py-4 px-6">
                        {{$student['age']}}
                    </td>
                </tr>  
                @endforeach
                
            </tbody>
        </table>
    </div>
</section>
@include('partials.footer')