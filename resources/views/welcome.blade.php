@extends('layout')

@section('title', 'Welcome')

@section('content')
    <div class=" pb-32 " >

        <div class=" max-w-6xl mx-auto my-10 sm:px- lg:px-8">
            <div class="flex justify-center">
              <img class="size-48  rounded-md" src="/images/cherrydone.png" />
            </div>

            <div class="flex  justify-center pt-8">
              <h1 class="text-3xl font-bold "> RBN Computers company </h1>
            </div>
        </div>

        <div class=" grid grid-cols-1 md:grid-cols-2 gap-4 mt-12 p-2">
              <div class="flex flex-col items-center justify-center mx-3">
                <img class="size-18 bg-white p-1 rounded-lg shadow-lg hover:scale-105 transition-transform" src="/images/milestones.png" />
                <h1 class="text-xl font-bold ">Milestones</h1>
              </div>

              <div class="flex flex-col items-center justify-center">
                <img class="size-18 bg-white p-1 rounded-lg shadow-lg hover:scale-105 transition-transform" src="/images/map.png" />
                <h1 class="text-xl font-bold ">Branches</h1>
              </div>

              <div class="flex flex-col items-center justify-center">
                <img class="size-18 bg-white p-1 rounded-lg shadow-lg hover:scale-105 transition-transform" src="/images/todo.png" />
                <h1 class="text-xl font-semibold ">ToDo</h1>
              </div>

              <div class="flex flex-col items-center justify-center">
                <img class="size-18 bg-white p-1 rounded-lg shadow-lg hover:scale-105 transition-transform" src="/images/diploma.png" />
                <h1 class="text-xl font-semibold ">Feedback</h1>
              </div>

          </div>
     
    <section>
      <div class="relative p-10">

        <img class="absolute left-6  size-12  p-1 rounded-lg shadow-lg " src="/images/curvature.png" />

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 relative z-10">
          <div class=" bg-cyan-600 text-white text-sm p-1 rounded-lg  font-sans shadow-lg"> 
            <p>We are extremely satisfied with the exceptional services provided by ShehabTech. The team is professional, responsive, and truly understands our needs. </p>
            <img class="size-12 rounded-lg mb-0.5" src="/images/thumb1.png" />
          </div>
          <div class=" bg-cyan-600 text-white text-sm p-1 rounded-lg  font-sans shadow-lg"> 
            <p> Their dedication to quality and efficiency has made a significant impact on our success. Highly recommended!" </p>
            <img class="size-12 p-1 rounded-lg mb-0.5" src="/images/thumb2.png" />
          </div>
          <div class=" bg-cyan-600 text-white text-sm p-1 rounded-lg  font-sans shadow-lg"> 
            <p> Outstanding service with professionalism and efficiency - highly recommended! </p>
            <img class="size-12 p-1 rounded-lg mb-0.5 " src="/images/thumb3.png" />
          </div>                
        </div> 

        <section>
          <div class="container relative "> 
            <div class=" bg-gray-400 absolute left-[50%] shadow-xl translate-x-[-50%] m-8 p-3 rounded-lg element-center flex-col w-140 max-w-full min-h-35 text-center">
              <h4 class="text-l font-semibold mb-0.5"> Get early access today </h4>
              <p> We're excited to help you achieving your goals. Whether you have a question, an idea, or you're ready to get started, we’re here to listen. 
                 Reach out to us today 
              </p>

              <form class="w-full flex justify-between items-center flex-wrap px-4 gap-8 my-1">

                <input type= "email" 
                  placeholder="email@x.com" class="w-full flex-1 text-black border-none outline-none h-7 text-sm rounded-2xl pl-3 bg-white" 
                />
                <button type="submit" 
                  class="w-full md:w-35 h-7 text-sm p-1 bg-sky-300  rounded-2xl hover:bg-sky-600 duration-200">
                  Get started for free 
                </button>

              </form>
            </div>
            
          </div>
        </section>
      </div>

    </section>  

  </div>
@endsection

