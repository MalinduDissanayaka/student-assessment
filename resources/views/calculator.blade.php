<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-blue-600">Student Marks Calculator</h2>

        <form action="{{ route('calculator.calculate') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium">Student Name</label>
                <input type="text" name="student_name" value="{{ old('student_name') }}" class="w-full border rounded p-2">
                @error('student_name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            @foreach(['mark1' => 'Subject 1', 'mark2' => 'Subject 2', 'mark3' => 'Subject 3'] as $name => $label)
            <div class="mb-4">
                <label class="block text-sm font-medium">{{ $label }}</label>
                <input type="number" name="{{ $name }}" value="{{ old($name) }}" class="w-full border rounded p-2">
                @error($name) <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            @endforeach

            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Calculate</button>
        </form>

        @if(session('status'))
        <div class="mt-8 p-4 border-t border-gray-200">
            <h3 class="font-bold text-lg">Results for: {{ session('name') }}</h3>
            <p>Total Marks: <strong>{{ session('total') }}</strong></p>
            <p>Average: <strong>{{ session('average') }}%</strong></p>
            <p>Status: 
                <span class="{{ session('status') == 'Pass' ? 'text-green-600' : 'text-red-600' }} font-bold">
                    {{ session('status') }}
                </span>
            </p>
        </div>
        @endif
    </div>
</body>
</html>