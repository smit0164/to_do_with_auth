@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">

  <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

    <!-- Add Todo Form -->
    <div class="md:col-span-1">
      <div class="bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">
          Add Todo Task
        </h2>

        <form method="post" action="{{route('todos.store')}}">
          @csrf
          <div class="mb-4">
            <label class="block text-gray-700 mb-2">Task Title</label>
            <input
              type="text"
              placeholder="Enter task title"
              name="title"
              class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" />
          </div>

          <div class="mb-4">
            <label class="block text-gray-700 mb-2">Description</label>
            <textarea
              name="description"
              rows="4"
              placeholder="Enter task description"
              class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
          </div>
          <div class="mb-4">
            <select name="status" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
              <option value="pending">pending</option>
              <option value="completed">completed</option>
            </select>
          </div>
          <button
            type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Add Todo
          </button>
        </form>
      </div>
    </div>

    <!-- Todo Cards -->
    @include('partials.card')
    <!-- EDIT MODAL -->
    <div id="editModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50 ">
      <div class="bg-white rounded-xl shadow-xl w-full max-w-lg p-6">
        <div class="flex justify-between items-center mb-4">
          <h2 class="text-xl font-bold text-gray-800">Edit Todo</h2>
          <button class="close-edit text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
        </div>

        <form  id="editForm" method="post">
          @csrf
          @method('put')
          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
            <input type="text" id="title" name="title" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
          </div>

          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
            <textarea rows="4" id="description" name="description" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
          </div>

          <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
            <select id="status" name="status" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
              <option value="pending">Pending</option>
              <option value="completed">Completed</option>
            </select>
          </div>

          <div class="flex justify-end gap-3">
            <button type="button" class="close-edit px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300">
              Cancel
            </button>
            <button type="submit" class="px-4 py-2 rounded-lg bg-blue-500 text-white hover:bg-blue-600">
              Update Todo
            </button>
          </div>
        </form>
      </div>
    </div>


    <!-- DELETE MODAL -->
    <div id="deleteModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
      <div class="bg-white rounded-xl shadow-xl w-full max-w-md p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-3">Delete Todo</h2>

        <p class="text-gray-600 mb-6">
          Are you sure you want to delete this todo? This action cannot be undone.
        </p>

        <div class="flex justify-end gap-3">
          <button class="close-delete px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300">
            Cancel
          </button>
          <form method="post" id="delete-form">
               @csrf
               @method('delete')
              <button type="submit" class="px-4 py-2 rounded-lg bg-red-500 text-white hover:bg-red-600">
                Delete
              </button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<script>
  $(document).ready(function(){
      $('.edit-todo').on('click',function(e){
         let element = $(this);
         $('#editModal').removeClass('hidden').addClass('flex');
         $('#id').val(element.data('id'));
         $('#title').val(element.data('title'));
         $('#description').val(element.data('description'));
         $('#status').val(element.data('status'));
         $('#editForm').attr('action','updte/todo/'+ element.data('id'));
      })
      $('.close-edit').on('click',function(){
         $('#editModal').removeClass('flex').addClass('hidden');
      })
      $('.delete-todo').on('click',function(e){
        console.log("hii");
          let element=$(this);
          $('#delete-form').attr('action','delete/todo/'+element.data('id'));
          $('#deleteModal').removeClass('hidden').addClass('flex');
      });
      $('.close-delete').on('click',function(){
          $('#deleteModal').removeClass('flex').addClass('hidden');
      });
  })
</script>
@endsection