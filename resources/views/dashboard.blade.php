<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



function confirmDelete(e) {
e.preventDefault();

var url = $(e).data('url');

swal({
title: 'Are you sure?',
text: 'Once deleted, you will not be able to recover this imaginary file!',
icon: 'warning',
buttons: true,
dangerMode: true,
})
.then((willDelete) => {
if (willDelete) {
swal('Poof! Your imaginary file has been deleted!', {
icon: 'success',
});
$.ajax({
url: "{{ route('admin.users.destroy', $user->id) }}",
method: "POST",
success: function(data) {
console.log("Yes! It works");
},
error: function(data) {
console.log("No! You are wrong!");
}
})
} else {
swal('Your imaginary file is safe!');
}
});
}
