<div class="md:col-span-2">
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Your Todos</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @forelse ($todos as $todo)
            <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 border border-gray-200 p-6">
                
                <!-- Header -->
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-semibold text-gray-800">
                        {{ $todo->title }}
                    </h3>

                    <span class="
                        px-3 py-1 text-sm font-medium rounded-full
                        {{ $todo->status == 'completed' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}
                    ">
                        {{ ucfirst($todo->status) }}
                    </span>
                </div>

                <!-- Description -->
                <p class="text-gray-600 leading-relaxed mb-5">
                    {{ $todo->description }}
                </p>

                <!-- Action Buttons -->
                <div class="flex justify-end gap-3">
                    <button data-id="{{$todo->id}}" data-status="{{$todo->status}}" data-title="{{$todo->title}}" data-description="{{$todo->description}}"    class="edit-todo bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-lg font-medium transition duration-200">
                        Edit
                    </button>

                    <button data-id="{{$todo->id}}" class="delete-todo bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg font-medium transition duration-200">
                        Delete
                    </button>
                </div>
            </div>

        @empty
            <div class="col-span-full">
                <div class="bg-gray-100 border border-dashed border-gray-300 rounded-xl p-8 text-center text-gray-500">
                    No Todo Available...
                </div>
            </div>
        @endforelse
    </div>
</div>