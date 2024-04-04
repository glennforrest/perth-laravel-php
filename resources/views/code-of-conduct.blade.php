<x-layout>
    <x-hero title="Code of Conduct" />

    <div class="container max-w-4xl py-8 md:py-24">
        <div class="prose-lg prose-p:text-body prose-a:underline">
            <section>
                <p>We are dedicated to a harassment-free meetup experience for everyone.</p>

                <p>All attendees, speakers, sponsors and volunteers at our meetups are required to agree with the following code of conduct. The code of conduct is enforced throughout our events by independent community volunteers in partnership with the organisers. We expect cooperation from all participants to help ensure a safe environment for everybody.</p>

                <p>If you have any questions, or are harassed in any way, please contact one of our staff. All reports are confidential. The organiser email address is: <a href="mailto:{{ config('app.organiser.email') }}">{{ config('app.organiser.email') }}</a></p>
            </section>

            <section>
                <h2>REPORTING</h2>

                <p>If at any time during the meetup you feel unsafe or want to report questionable behaviour, you can contact a member of the team.</p>

                <p>{{ config('app.organiser.name') }}, Meetup Organiser</p>
            </section>

            <section>
                <h2>PERSONAL REPORT</h2>

                <p>You can make a personal report by:</p>

                <p>Emailing the Organiser Email on <a href="mailto:{{ config('app.organiser.email') }}">{{ config('app.organiser.email') }}</a>.</p>

                <p>You can also ask a staff member, identified by staff shirts, to help you get in contact with the safety & organising team.</p>

                <p>We can't follow up an anonymous report with you directly, but we will fully investigate it and take whatever action is necessary to prevent a recurrence.</p>
            </section>

            <section>
                <h2>WHAT HAPPENS WHEN I CONTACT THE TEAM?</h2>

                <p>When taking a personal report, the organisers and volunteers will ensure you are safe and cannot be overheard. They may involve other event staff to ensure your report is heard properly. Once safe, we'll ask you to tell us about what happened. We understand that this can be upsetting and you can bring someone to support you.</p>

                <p>The volunteers and organisers are committed to handling each report seriously, respectfully and confidentially. You won't be asked to confront anyone and we won't tell anyone who you are.</p>

                <p>Our meetups are dedicated to providing a harassment-free meetup experience for everyone, regardless of gender, gender identity and expression, age, sexual orientation, disability, physical appearance, body size, race, ethnicity, or religion (or lack thereof).</p>

                <p>We do not tolerate harassment of meetup participants in any form. Sexual language and imagery is not appropriate for any meetup venue, including talks, workshops, parties, Twitter and other online media. Meetup participants violating these rules may be sanctioned or expelled from the meetup at the discretion of the meetup organisers without a refund.</p>

                <p>Harassment includes offensive verbal comments related to gender, gender identity and expression, age, sexual orientation, disability, physical appearance, body size, race, ethnicity, religion, sexual images in public spaces, deliberate intimidation, stalking, following, harassing photography or recording, sustained disruption of talks or other events, inappropriate physical contact, and unwelcome sexual attention.</p>

                <p>Participants asked to stop any harassing behaviour are expected to comply immediately.</p>

                <p>Sponsors are also subject to the anti-harassment policy. In particular, sponsors should not use sexualised images, activities, or other material. Booth staff (including volunteers) should not use sexualised clothing/uniforms/costumes, or otherwise create a sexualised environment.</p>

                <p>If a participant engages in harassing behaviour, the meetup organisers may take any action they deem appropriate, including warning the offender or expulsion from the meetup with no refund.</p>

                <p>If you are being harassed, notice that someone else is being harassed, or have any other concerns, please contact a member of meetup staff immediately. Meetup staff can be identified as they'll be wearing branded t-shirts.</p>

                <p>Meetup staff - identified by staff badges - will be happy to help participants contact venue security or local law enforcement, provide escorts, or otherwise assist those experiencing harassment to feel safe for the duration of the meetup. We value your attendance.</p>

                <table class="uppercase">
                    <tbody>
                        <tr>
                            <td>ORGANISER EMAIL CONTACT</td>
                            <td><a href="mailto:{{ config('app.organiser.email') }}">{{ config('app.organiser.email') }}</a></td>
                        </tr>

                        <tr>
                            <td>LOCAL LAW ENFORCEMENT</td>
                            <td><a href="tel:000">000</a></td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section>
                <p>We expect participants to follow these rules at meetup and workshop venues and meetup-related social events.</p>

                <p>Original Code of Conduct source and credit: JSConf.us & The Ada Initiative. This work is licensed under a Creative Commons Attribution 3.0 Unported License.</p>

                <p>Contact us at <a href="mailto:{{ config('app.organiser.email') }}">{{ config('app.organiser.email') }}</a></p>
            </section>
        </div>
    </div>
</x-layout>
