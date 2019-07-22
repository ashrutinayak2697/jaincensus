@component('mail::message')

Dear User,
Thank you for Registering in Jain Census.
@component('mail::table')
| User       | Details |
| ------------- |:-------------:|  
| Name       | Nikhil B Shah |  
| AdharcardNumber      | 262354637836    | 
| Passport      |  | |
| Birthday     | 20/2/2016 | 
| MobileNumber     | +91 7383416022| 
| Email      | shahnikhilb@gmail.com | 
| Address      | Paldi | 
| Landmark      |  | 
| Area      | Paldi | 
| Gender      | Male | 
| Pincode      | 380007 | 
| City      | Ahemdabad | 
| State      | Gujarat | 
| Country      | India | 
| Sampraday      | Shwetambar | 
| RegisterNumber      | JC00000154 | 


@endcomponent

@component('mail::button', ['url' => 'https://jainsangh.info/jaincensus/verification','color' => 'green'])
Edit Profile 
@endcomponent

Thanks,<br>
{{ config('app.name') }}<br>  www.jainsankhya.org  - A initiative by Samast Mahajan

 <!--  {{-- Footer --}} -->
    @slot('footer')
        @component('mail::footer')
           Powered by Vnurture Technologies
        @endcomponent
    @endslot
@endcomponent
