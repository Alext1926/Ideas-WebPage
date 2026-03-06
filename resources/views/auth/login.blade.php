<x-layout>
    <form action="/login" method="POST">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">Log In</legend>


            <label class="label">Email</label>
            <input  class="input" name="email" type="email" placeholder="Your Email" required/>
            <x-forms.error name="email"/>
            <label class="label">Password</label>
            <input  type="password" name="password" class="input" placeholder="Your Password" required/>

            <button class="btn btn-neutral mt-4">Log in</button>
        </fieldset>
        </form>
</x-layout>
