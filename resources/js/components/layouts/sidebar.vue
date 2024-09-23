<template>
    <ul
      :class="['navbar-nav bg-gradient-primary sidebar sidebar-dark accordion', { toggled: isToggled }]"
      id="accordionSidebar"
    >
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="" alt="Brand Image" class="image" />
        </div>
        <div class="sidebar-brand-text">Bitcoin</div>
      </a>
  
      <!-- Divider -->
      <hr class="sidebar-divider my-0" />
  
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <router-link class="nav-link" to="">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </router-link>
      </li>
       <!-- Dropdown Menu - Components -->
       <li class="nav-item">
        <a
          class="nav-link collapsed"
          href="#"
          @click.prevent="toggleDropdown"
          aria-expanded="true"
        >
          <i class="fas fa-fw fa-cog"></i>
          <span>Automated Deposit</span>
        </a>
        <div
          :class="['collapse', { show: isDropdownOpen }]"
          aria-labelledby="headingTwo"
          data-parent="#accordionSidebar"
        >
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <router-link class="collapse-item" to=""><i class="fa-solid fa-address-card"></i> <span>Automatic Method</span></router-link>
          </div>
        </div>
      </li>
  
      <li class="nav-item">
        <router-link class="nav-link" to="">
          <i class="fa-solid fa-code"></i>
          <span>Transaction Log</span>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="">
          <i class="fa-solid fa-person"></i>
          <span>Repeat History</span>
        </router-link>
      </li>
       <!-- Dropdown Menu - Components -->
       <li class="nav-item">
        <a
          class="nav-link collapsed"
          href="#"
          @click.prevent="toggleDropdowns"
          aria-expanded="true"
        >
          <i class="fas fa-fw fa-cog"></i>
          <span>Bank Deposit</span>
        </a>
        <div
          :class="['collapse', { show: isDropdownOpens }]"
          aria-labelledby="headingThree"
          data-parent="#accordionSidebarr"
        >
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <router-link class="collapse-item" to=""><i class="fa-solid fa-address-card"></i> <span>Add Manual Method</span></router-link>
            <router-link class="collapse-item" to=""><i class="fa-solid fa-address-card"></i> <span>View Manual Method</span></router-link>
            <router-link class="collapse-item" to=""><i class="fa-solid fa-address-card"></i> <span>Pending Request</span></router-link>
            <router-link class="collapse-item" to=""><i class="fa-solid fa-address-card"></i> <span>Manual Deposit History</span></router-link>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider" />
      <!-- <li class="nav-item">
        <router-link class="nav-link" to="">
          <i class="fa fa-history"></i>
          <span>All Deposit History</span>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="">
          <i class="fa-solid fa-house"></i>
          <span>Manage Withdraw</span>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="">
          <i class="fa-solid fa-city"></i>
          <span>Cities</span>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="">
          <i class="fa-solid fa-location-dot"></i>
          <span>Location</span>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="">
          <i class="fa-solid fa-money-bill"></i>
          <span>Foreign Investors</span>
        </router-link>
      </li> -->
      <hr class="sidebar-divider" />
      <!-- <li class="nav-item">
        <router-link class="nav-link" to="">
          <i class="fas fa-th-list"></i>
          <span>Category</span>
        </router-link>
      </li> -->
      <!-- <li class="nav-item">
        <router-link class="nav-link" to="">
          <i class="fas fa-th-list"></i>
          <span>Article</span>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="">
          <i class="fa-solid fa-bag-shopping"></i>
          <span>Mortgage & Home Loan</span>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="">
          <i class="fa-solid fa-address-card"></i>
          <span>About</span>
        </router-link>
      </li> -->
      <!-- Divider -->
      <hr class="sidebar-divider" />
  
      <!-- Heading -->
      <div class="sidebar-heading">Interface</div>
  
      <!-- Divider -->
      <hr class="sidebar-divider" />
  
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle" @click="toggleSidebar"></button>
      </div>
    </ul>
  </template>
  
  <script setup>
  import { ref } from 'vue';
//   import image1Path from '@/assets/img/Insha-icon.png'; 
  
//   const image1 = ref(image1Path);
  const isToggled = ref(false);
  const isDropdownOpen = ref(false);
  const isDropdownOpens= ref(false);
  
  const toggleSidebar = () => {
    isToggled.value = !isToggled.value;
  };
  
  const toggleDropdown = () => {
    isDropdownOpen.value = !isDropdownOpen.value;
  };
  const toggleDropdowns = () => {
    isDropdownOpens.value = !isDropdownOpens.value;
  };
  
  </script>
  
 
  