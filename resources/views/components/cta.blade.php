<div class="container my-16">
    <div class="py-20 px-8 bg-dark-fill/50 rounded-3xl">
        <div class="flex flex-col items-center justify-center mx-auto max-w-[996px]">
            <div class="flex flex-col items-center justify-center text-center">
                <h2 class="text-2xl/none font-bold text-primary">
                    The People
                </h2>

                <p class="text-3xl font-bold text-white sm:text-6xl tracking-[-3%]">
                    Join Our Community
                </p>

                <p class="text-body mt-6">
                    Immerse yourself in the vibrant world of Perth Laravel PHP Meetup! Dive into our dynamic community where discussions on Laravel and web app development thrive across Facebook, LinkedIn, and Slack. Stay in the loop with regular updates, insightful posts, and lively conversations. Don't miss out—join us today and fuel your passion for cutting-edge web development!
                </p>
            </div>

            <div class="mt-12 flex flex-col gap-4 md:flex-row items-center justify-center md:gap-6">
                <x-button theme="secondary" href="{{ config('app.facebook_url') }}" target="_blank" class="flex items-center space-x-3">
                    <span>Our Facebook</span>

                    <svg class="fill-current h-4 w-4 flex-none" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 8.04902C16 3.60302 12.418 -0.000976562 7.99999 -0.000976562C3.57999 2.34375e-05 -0.00201416 3.60302 -0.00201416 8.05002C-0.00201416 12.067 2.92399 15.397 6.74799 16.001V10.376H4.71799V8.05002H6.74999V6.27502C6.74999 4.25802 7.94499 3.14402 9.77199 3.14402C10.648 3.14402 11.563 3.30102 11.563 3.30102V5.28102H10.554C9.56099 5.28102 9.25099 5.90202 9.25099 6.53902V8.04902H11.469L11.115 10.375H9.24999V16C13.074 15.396 16 12.066 16 8.04902Z" />
                    </svg>
                </x-button>

                <x-button theme="secondary" href="{{ config('app.linkedin_url') }}" target="_blank" class="flex items-center space-x-3">
                    <span>Our LinkedIn</span>

                    <svg class="fill-current h-4 w-4 flex-none" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 1.146C0.5 0.513 1.026 0 1.675 0H15.325C15.974 0 16.5 0.513 16.5 1.146V14.854C16.5 15.487 15.974 16 15.325 16H1.675C1.026 16 0.5 15.487 0.5 14.854V1.146ZM5.443 13.394V6.169H3.042V13.394H5.443ZM4.243 5.182C5.08 5.182 5.601 4.628 5.601 3.934C5.586 3.225 5.081 2.686 4.259 2.686C3.437 2.686 2.9 3.226 2.9 3.934C2.9 4.628 3.421 5.182 4.227 5.182H4.243ZM9.151 13.394V9.359C9.151 9.143 9.167 8.927 9.231 8.773C9.404 8.342 9.799 7.895 10.463 7.895C11.332 7.895 11.679 8.557 11.679 9.529V13.394H14.08V9.25C14.08 7.03 12.896 5.998 11.316 5.998C10.042 5.998 9.471 6.698 9.151 7.191V7.216H9.135L9.151 7.191V6.169H6.751C6.781 6.847 6.751 13.394 6.751 13.394H9.151Z" />
                    </svg>
                </x-button>

                <x-button href="{{ config('app.meetup_url') }}" class="flex items-center space-x-3" target="_blank">
                    <span>Become a Member</span>

                    <x-heroicon-s-users class="h-4 w-4 flex-none" />
                </x-button>
            </div>
        </div>
    </div>
</div>
