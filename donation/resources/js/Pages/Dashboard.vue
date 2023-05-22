<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard

            
            </h2>
            <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="products" rel="stylesheet" >
    
    <title>Button</title>
  
</head>
<body>
    <div class="container">
        <h1 style="text-align:center;">Html Link Button With action attribute</h1>
        <form action="products">
            <button class="btn btn-danger btn-lg">Click</button>
        </form>
    </div>
</body>
           

        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                    
                    <Welcome />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
