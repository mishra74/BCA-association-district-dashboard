
<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
          
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        td{color: #000;}
        .submitbtn{float:right;
        margin-top:10px;
    background-color:#f2f2f2;
padding:8px;
border-radius:8px;
margin-bottom:8px}
.filter{
    color:black;
    height: 25px;
    margin-bottom:20px
}
    </style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('List of Players') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   

                    <!-- Filter input -->
                    <div>
                        Filter: <input type="text" id="filter" class="filter">
                    </div>
                    <hr/>

                    <!-- Players table -->
                    <form action="{{route('select_player')}}" method="post">
                        @csrf
                    <table id="players-table">
                        <thead>
                            <tr>
                                <th>Si. No.</th>
                                <th>Name of Player</th>
                                <th>Father's Name</th>
                                <th>Qualification</th>
                                <th>Category</th>
                                <th>Date of Birth</th>
                                <th>Email ID</th>
                                <th>Mobile Number</th>
                                <th>Aadhar Number</th>
                                <th>Proficiency</th>
                                <th>Select Players</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Loop through players data -->
                            @foreach ($player as $player)
                            <tr>
                                <td>{{ $player->id }}</td>
                                <td>{{ $player->fname }}  {{ $player->lname }}</td>
                                <td>{{ $player->ffname }} {{ $player->fmname }} {{ $player->flname }}</td>
                                <td>{{ $player->qualification }}</td>
                                <td>{{ $player->category }}</td>
                                <td>{{ $player->dob }}</td>
                                <td>{{ $player->email }}</td>
                                <td>{{ $player->number }}</td>
                                <td>{{ $player->aadhar }}</td>
                                <td>{{ $player->proficiency }}</td>
                            
                                <td><input type="checkbox" name="selected_players[]" value="{{ $player->id }}" {{$player->Selection ? 'checked' : ''}}></td>
                                <td><button>  <a href="{{url('/player')}}/{{$player->id}}">View</a><button></td>
                              
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr/>
                    
                    <div class="submitbtn">
                        <button type="submit">Submit</button>
                    </div>
                       <hr/>
                    
</form>
                 
                </div>
            </div>
        </div>
    </div>
   

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Filter table rows
        document.getElementById("filter").addEventListener("input", function() {
            var filterValue = this.value.toLowerCase();
            var rows = document.querySelectorAll("#players-table tbody tr");
            rows.forEach(function(row) {
                var text = row.textContent.toLowerCase();
                if (text.includes(filterValue)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
        $(document).ready(function(){
       
        $(".close").click(function(){
            $("#popup").fadeOut();
        });
    


    });
   

    </script>
</x-app-layout>
