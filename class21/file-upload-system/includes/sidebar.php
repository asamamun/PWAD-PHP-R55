<aside id="sidebar" class="w-1/6 bg-gray-200 sticky top-0 left-0 h-screen z-50">
  <div class="flex flex-col bg-gray-100 rounded-md xs:hidden sm:hidden px-3 p-2 mx-2 mt-2 mb-6">
    <h5 class="text-lg"><?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></h5>
    <h5 class="text-base"><?php echo $_SESSION['email']; ?></h5>
  </div>
  <nav class="">
    <ul class="flex flex-col gap-1 xs:text-2xl sm:text-2xl" >
      <li class="block hover:bg-gray-300" >
        <a href="index.php" class="flex items-center xs:justify-center sm:justify-center gap-4 md:gap-2 xs:text-center px-8 md:px-3 lg:px-6 py-2" >
          <i class="fas fa-tachometer-alt w-4 xs:w-fit sm:w-fit h-4 xs:h-fit sm:h-fit" ></i>
          <span class="xs:hidden sm:hidden" >Dashboard</span>
        </a>
      </li>
      <li class="block hover:bg-gray-300">
        <a href="upload.php" class="flex items-center xs:justify-center sm:justify-center gap-4 md:gap-2 xs:text-center px-8 md:px-3 lg:px-6 py-2" >
          <i class="fas fa-upload w-4 xs:w-fit sm:w-fit h-4 xs:h-fit sm:h-fit" ></i>
          <span class="xs:hidden sm:hidden" >Uploads</span>
        </a>
      </li>
      <li class="block hover:bg-gray-300">
        <a href="pictures.php" class="flex items-center xs:justify-center sm:justify-center gap-4 md:gap-2 xs:text-center px-8 md:px-3 lg:px-6 py-2" >
          <i class="fas fa-image w-4 xs:w-fit sm:w-fit h-4 xs:h-fit sm:h-fit" ></i>
          <span class="xs:hidden sm:hidden" >Pictures</span>
        </a>
      </li>
      <li class="block hover:bg-gray-300">
        <a href="documents.php" class="flex items-center xs:justify-center sm:justify-center gap-4 md:gap-2 xs:text-center px-8 md:px-3 lg:px-6 py-2" >
          <i class="fas fa-file w-4 xs:w-fit sm:w-fit h-4 xs:h-fit sm:h-fit" ></i>
          <span class="xs:hidden sm:hidden" >Documents</span>
        </a>
      </li>
      <li class="block hover:bg-gray-300">
        <a href="auth/logout.php" class="flex items-center xs:justify-center sm:justify-center gap-4 md:gap-2 xs:text-center px-8 md:px-3 lg:px-6 py-2" >
          <i class="fas fa-power-off w-4 xs:w-fit sm:w-fit h-4 xs:h-fit sm:h-fit" ></i>
          <span class="xs:hidden sm:hidden" >Logout</span>
        </a>
      </li>
    </ul>
  </nav>
</aside>