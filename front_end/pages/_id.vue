<template>
	<div class="container w-full md:max-w-3xl mx-auto pt-20">
		<div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">
			<div class="font-sans">
				<p class="text-base md:text-sm text-green-500 font-bold">&lt; <nuxt-link to="/" class="text-base md:text-sm text-blue-500 font-bold no-underline hover:underline">BACK TO BLOG</nuxt-link></p>
						<h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">{{this.post.title}}</h1>
						<p class="text-sm md:text-base font-normal text-gray-600">{{this.post.updated_at}}</p>
			</div>
			<p class="py-6">{{this.post.content}}</p>
		</div>
	</div>
</template>

<script>
export default {
  async asyncData ({ $axios, params }) {
  const post = await $axios.$get(`http://back_end.test/api/posts/${params.id}`)
  console.log(post);
  // const post = params.id
  return { post}
  }
}
</script>
