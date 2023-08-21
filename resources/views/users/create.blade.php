@include('partials.header', ['title' => 'Register'])
<div class="max-w-lg mx-auto">
  <a href="#">Admin Login</a>
  <main class="bg-slate-900 mx-w-lg p-8 my-10 mx-auto rounded-lg shadow-2xl">
    <section>
      <h1>Welcome to the Login</h1>
    </section>
    <form action="">
      <div class="mb-2">
        <label for="email">Enter Email: </label>
        <input type="email" name="email" id="email" class="bg-black text-white" >
      </div>
      <div>
        <label for="password">Enter Password: </label>
        <input type="password" name="password" id="password" class="bg-black text-white" >
      </div>
      <button type="submit" class="bg-white text-black rounded-md p-2">Login</button>
    </form>
  </main>
   
</div>
@include('partials.footer')