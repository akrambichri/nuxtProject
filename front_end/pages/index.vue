<template>
  <div class="bg-blue-300  py-20 px-20">
    <!-- <div class="flex justify-between items-center">
      <div v-for="post in posts" :key="post.id" class="bg-white w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
          <img src="https://picsum.photos/800" class="">
          <div class="p-5">
            <h1 class="text-2xl font-bold text-blue-800 py-2"> {{ post.title }}</h1>
            <p class="bg-white text-sm text-black">{{ post.content }}</p>
            <nuxt-link :to="`/${post.id}`" class="py-2 px-3 mt-4 px-6 text-white bg-blue-500 inline-block rounded">Read More</nuxt-link>
          </div>
      </div>
    </div> -->
    <div class="flex flex-wrap px-6">
        <div v-for="post in posts" :key="post.id" class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
            <div class="bg-white hover:shadow-xl">
                <div class="">
                    <img src="https://images.pexels.com/photos/956999/milky-way-starry-sky-night-sky-star-956999.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""
                        class="h-56 w-full border-white border-8 hover:opacity-25">
                </div>
                <div class="px-4 py-4 md:px-10">
                    <h1 class="font-bold text-lg">
                        {{ post.title }}
                    </h1>
                    <p class="py-4">
                          {{ post.content }}
                    </p>
                    <div class="flex flex-wrap pt-8">
                        <div class="w-full md:w-3/4 text-sm font-medium">
                         Created at : {{ post.created_at }}
                        </div>
                        <div class="1/4">
                            <div class="text-sm font-medium">
                              <nuxt-link :to="`/${post.id}`" class="py-2 px-3 mt-4 px-6 text-white bg-blue-500 inline-block rounded">Read More</nuxt-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
  </div>
</template>

<script>
  export default {
    async asyncData ({ $axios }) {
      const {data} = await $axios.get('http://back_end.test/api/posts')
      console.log(data);
      return {posts:data}
    }
  }
</script>
