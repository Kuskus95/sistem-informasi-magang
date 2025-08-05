<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black">
  <div class="container mx-auto px-4 py-12 max-w-3xl">
    <div class="bg-white rounded-2xl shadow-lg p-6 md:p-10">
      <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800">Create Your Account</h2>
        <p class="text-gray-500 mt-2">Fill in the details below to get started</p>
      </div>

      <form>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- First Name -->
          <div>
            <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
            <input type="text" id="firstName" class="w-full px-4 py-3 rounded-lg border border-gray-300  transition duration-150 ease-in-out" placeholder="Rajesh">
          </div>

          <!-- Last Name -->
          <div>
            <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
            <input type="text" id="lastName" class="w-full px-4 py-3 rounded-lg border border-gray-300  transition duration-150 ease-in-out" placeholder="Maheshwari">
          </div>

          <!-- Email -->
          <div class="md:col-span-2">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300  transition duration-150 ease-in-out" placeholder="rajesh@example.com">
          </div>

          <!-- Phone Number -->
          <div class="md:col-span-2">
            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
            <input type="tel" id="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300  transition duration-150 ease-in-out" placeholder="‪+91 1234567890‬">
          </div>

          <!-- Password -->
          <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" id="password" class="w-full px-4 py-3 rounded-lg border border-gray-300  transition duration-150 ease-in-out" placeholder="••••••••">
          </div>

          <!-- Confirm Password -->
          <div>
            <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
            <input type="password" id="confirmPassword" class="w-full px-4 py-3 rounded-lg border border-gray-300  transition duration-150 ease-in-out" placeholder="••••••••">
          </div>

          <!-- Date of Birth -->
          <div>
            <label for="dob" class="block text-sm font-medium text-gray-700 mb-1">Date of Birth</label>
            <input type="date" id="dob" class="w-full px-4 py-3 rounded-lg border border-gray-300  transition duration-150 ease-in-out">
          </div>

          <!-- Country -->
          <div>
            <label for="country" class="block text-sm font-medium text-gray-700 mb-1">Country</label>
            <select id="country" class="w-full px-4 py-3 rounded-lg border border-gray-300  transition duration-150 ease-in-out">
              <option value="" selected disabled>Select your country</option>
              <option value="us">United States</option>
              <option value="ca">Canada</option>
              <option value="uk">United Kingdom</option>
              <option value="au">Australia</option>
            </select>
          </div>

          <!-- Address -->
          <div class="md:col-span-2">
            <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Address</label>
            <textarea id="address" rows="3" class="w-full px-4 py-3 rounded-lg border border-gray-300  transition duration-150 ease-in-out" placeholder="Enter your full address"></textarea>
          </div>

          <!-- Occupation -->
          <div class="md:col-span-2">
            <label for="occupation" class="block text-sm font-medium text-gray-700 mb-1">Occupation</label>
            <input type="text" id="occupation" class="w-full px-4 py-3 rounded-lg border border-gray-300  transition duration-150 ease-in-out" placeholder="Software Developer">
          </div>

          <!-- Terms and Conditions -->
          <div class="md:col-span-2 mt-2">
            <div class="flex items-start">
              <div class="flex items-center h-5">
                <input id="terms" type="checkbox" class="h-5 w-5 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
              </div>
              <div class="ml-3 text-sm">
                <label for="terms" class="font-medium text-gray-700">I agree to the <a href="#" class="text-indigo-600 hover:text-indigo-500">Terms and Conditions</a> and <a href="#" class="text-indigo-600 hover:text-indigo-500">Privacy Policy</a></label>
              </div>
            </div>
          </div>
        </div>

        <!-- Submit Button -->
        <div class="mt-8">
          <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 px-4 rounded-lg transition duration-150 ease-in-out shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Create Account
          </button>
        </div>

        <!-- Sign In Link -->
        <div class="text-center mt-6">
          <p class="text-sm text-gray-600">
            Already have an account? <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Sign in</a>
          </p>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
