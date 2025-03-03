{{-- <div class="p-4 card">
    <h4>Enter Verification Code</h4>
    <p class="text-muted">We sent a code to your {{ method === 'phone' ? 'phone' : 'email' }}.</p>

    <input type="text" class="form-control" placeholder="Enter OTP">

    <button class="mt-3 btn btn-primary w-100" x-on:click="step = 3">Verify</button>
</div> --}}


<div>
    <h2 class="text-xl font-bold">ENTER OTP CODE</h2>
    <p class="text-gray-600">Enter the 6-digit verification code received via SMS.</p>

    <div class="flex justify-between my-4">
        <input type="text" maxlength="1" class="w-10 h-10 text-center border rounded">
        <input type="text" maxlength="1" class="w-10 h-10 text-center border rounded">
        <input type="text" maxlength="1" class="w-10 h-10 text-center border rounded">
        <input type="text" maxlength="1" class="w-10 h-10 text-center border rounded">
        <input type="text" maxlength="1" class="w-10 h-10 text-center border rounded">
        <input type="text" maxlength="1" class="w-10 h-10 text-center border rounded">
    </div>

    <p class="text-sm text-gray-600">
        Did not receive OTP yet? <a href="#" class="text-blue-500">Send Again</a>
        <span class="ml-2 text-gray-500">00:59</span>
    </p>

    <button class="w-full py-2 mt-4 text-white bg-gray-400 rounded" disabled>Verify</button>
</div>
