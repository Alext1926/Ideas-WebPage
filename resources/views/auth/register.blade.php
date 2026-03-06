<x-layout>
    <form action="/register" method="POST">
        @csrf
    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
        <legend class="fieldset-legend">Register</legend>

        <label class="label">Name</label>
        <input class="input" name="name" placeholder="Your Name" required/>

        <label class="label">Email</label>
        <input  class="input" name="email" type="email" placeholder="Your Email" required/>

        <label class="label">Password</label>
        <input  type="password" name="password" class="input" placeholder="Your Password" required/>

        <button class="btn btn-neutral mt-4">Login</button>
    </fieldset>
</x-layout>
