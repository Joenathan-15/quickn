<div class="flex flex-row min-h-screen justify-center items-center">
    <div class="border border-black rounded-md p-10 lg:w-1/2 xl:w-1/3 w-full">
        <h1 class="font-semibold text-3xl text-center pb-5">
            Register
        </h1>
        <form class="grid gap-5">
            <input placeholder="Email" type="email" class="border h-10 w-full p-2 rounded-md">
            <input placeholder="username" class="border h-10 w-full p-2 rounded-md">
            <input placeholder="password" type="password" class="border h-10 w-full p-2 rounded-md">
            <div class="flex justify-between items-center">
                <small>Have an account? <a class="text-blue-500" wire:navigate href="/login">Login Here</a></small>
            </div>
            <Button class="bg-green-300 rounded-md p-3 transition duration-150 ease-in-out hover:bg-green-400">Register</Button>
        </form>
    </div>
</div>
