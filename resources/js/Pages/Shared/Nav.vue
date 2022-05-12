<template>
<nav>
    <ul class="flex space-x-4">
        <li>
            <NavLink href="/users" :active="$page.component=='Users'">
                users
            </NavLink>
        </li>
        <li>
            <NavLink href="/about" :active="$page.component=='About'">
                about
            </NavLink>
         </li>
    </ul>
</nav>
</template>

<script setup>

import NavLink from '@/Pages/Shared/NavLink';
</script>

