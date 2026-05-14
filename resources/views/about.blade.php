@extends('layouts.app2')

@section('content')

<!-- Hero Section / Header -->
<section class="mb-lg">
    <h1 class="font-display text-display text-primary mb-2">About the Application
        Letter Agenda Application - SIMANTAP</h1>
    <div class="flex items-center gap-2 text-on-surface-variant">
        <span class="material-symbols-outlined text-secondary">verified</span>
        <p class="font-body-lg text-body-lg">Agenda Management Information System for Incoming
            and Outgoing Letters
            Satpol PP Semarang City</p>
    </div>
</section>
<!-- Main Layout Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
    <!-- Description Card -->
    <div class="lg:col-span-8 space-y-gutter">
        <article
            class="bg-surface-container-lowest rounded-2xl p-md border border-outline-variant card-shadow relative overflow-hidden h-full">
            <div class="absolute top-0 left-0 w-1.5 h-full bg-secondary"></div>
            <h3 class="font-headline-md text-headline-md text-on-surface mb-4">Digital Administrative
                Efficiency</h3>
            <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                SIMANTAP is a cutting-edge digital solution specifically designed for the internal
                environment of the <strong>Satuan Polisi Pamong Praja (Satpol PP)</strong> of Semarang City.
            </p>
            <p class="mt-5">This application serves to automate the entire process of recording incoming and
                outgoing
                letters, replacing conventional methods that are time-consuming and prone to human error.
            </p>
            <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-4 bg-surface-container-low rounded-xl border border-outline-variant/30">
                    <span class="material-symbols-outlined text-primary mb-2">speed</span>
                    <h4 class="font-title-lg text-[16px] mb-1 font-semibold">Quick Response</h4>
                    <p class="font-body-md text-body-md text-on-surface-variant">Accelerating letter distribution
                        between departments.</p>
                </div>
                <div class="p-4 bg-surface-container-low rounded-xl border border-outline-variant/30">
                    <span class="material-symbols-outlined text-primary mb-2">security</span>
                    <h4 class="font-title-lg text-[16px] mb-1 font-semibold">Data Security</h4>
                    <p class="font-body-md text-body-md text-on-surface-variant">Digital archive that
                        is encrypted and secure.</p>
                </div>


                <div class="p-4 bg-surface-container-low rounded-xl border border-outline-variant/30">
                    <span class="material-symbols-outlined text-primary mb-2">monitoring</span>
                    <h4 class="font-title-lg text-[16px] mb-1 font-semibold">Real-time Monitoring</h4>
                    <p class="font-body-md text-body-md text-on-surface-variant">Track the status of letters
                        anytime and from anywhere.</p>
                </div>
            </div>
        </article>
    </div>
    <!-- Team Section -->
    <aside class="lg:col-span-4 flex flex-col gap-gutter">
        <div class="bg-surface-container-lowest rounded-2xl p-md border border-outline-variant card-shadow h-full">
            <h3 class="font-headline-md text-[20px] text-primary mb-6 flex items-center gap-2">
                <span class="material-symbols-outlined">groups</span>
                Tim Pengembang
            </h3>
            <div class="space-y-6">
                <!-- Team Member 1 -->
                <div class="flex items-center gap-4 group">
                    <div class="relative w-16 h-16">
                        <img class="w-full h-full object-cover rounded-2xl border-2 border-primary/20 group-hover:border-primary transition-colors"
                            data-alt="A professional headshot of a female software engineer named Dexi, set against a blurred modern office background. She wears business casual attire with a focused yet friendly expression. The lighting is bright and professional, following a corporate clean aesthetic with soft shadows and high-key illumination."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0lmkyM7NZLF-93Xu8FnKBoJr9YAvMJehvSfoTPwdf4onFcmTKHiseWm2wqPdMev7YqwEBKkckPN5mdqOXYEqyV_oQHcDAwfMd_sgXEPJIValEMrNOW05Dhtd5OL1vzK4gTGKbZn38w9CkugMR42SxNEEAOrTfU4gbVmOw1RsioWnwDp2QCIzVGicpfsXgS811YAuXR6DROoITHqXv9yLDZAkTIb2CMyoMlMOgXBoJCWoE97eK0vPUFs1UzTGo23yMXSAXuNQkCXqf" />
                    </div>
                    <div>
                        <h4 class="font-title-lg text-[16px]">Devi</h4>
                        <p class="font-label-md text-label-md text-on-surface-variant">Lead Developer</p>
                    </div>
                </div>
                <!-- Team Member 2 -->
                <div class="flex items-center gap-4 group">
                    <div class="relative w-16 h-16">
                        <img class="w-full h-full object-cover rounded-2xl border-2 border-primary/20 group-hover:border-primary transition-colors"
                            data-alt="A portrait of Retno, a middle-aged female administrative systems analyst, captured in a brightly lit governmental office environment. She has a professional and reliable demeanor, wearing a modest blazer. The scene is illuminated by natural light from large windows, creating a serene and authoritative atmosphere consistent with institutional leadership styles."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBsluLJ2gSCkU38Vs9Dksmmdenwr4hwRrtEgC1kiExfVE7jo5HfVLh3ZgZKdE1EiUiK_rU7jgHNlDDr2W0_4Qjzcnt9bIPemjEkR7lshW0qGUiiEp3go1m17IStpEKiPMmjTB3zabJisjeCFtS8XWL94sC83zj_c2pHafX4qiXi3i5GXnzBSRrPrJcvaXgjfYbEYRa2tMFACEiUeI9HaZCLLPPnNxM-Pivpoo15rERvDLIV8nVLBbSpdJ9k-ZyhCYb7lDhDms7tDD0f" />
                    </div>
                    <div>
                        <h4 class="font-title-lg text-[16px]">Affifah</h4>
                        <p class="font-label-md text-label-md text-on-surface-variant">System Analyst</p>
                    </div>
                </div>
                <!-- Team Member 3 -->
                <div class="flex items-center gap-4 group">
                    <div class="relative w-16 h-16">
                        <img class="w-full h-full object-cover rounded-2xl border-2 border-primary/20 group-hover:border-primary transition-colors"
                            data-alt="A professional portrait of Affifah, a young female UI/UX designer, posing in a modern collaborative studio space. She has a creative and approachable look, holding a digital tablet. The background features soft tonal layers of slate and emerald, matching a professional corporate color palette with clean, diffused lighting that emphasizes clarity and modern design."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDB6W1EbDJA3y-6H5hfhgohG3Ou6XpxBfTcE-BPUeh6hyv1_9Oj4wd7q2TzR33HIqxYnNwui4hZJgXXkvC1vy6ep-SAXTg4meBUX94U-Yzhgij3CUccIaaRs1K7AGUDOCcKq_4zfUAEfj9WtN68tAV4NqXhpwQls3vt1OvPBi7SV7lMNv6qf8vCJnuQNubtqXZGXkPOeDlS1-5z0sUWB7uLLUIneZFiz9zGwIolliJ3ePE2m7V7GwKMOfFLK-dDgMIKdDQI86eGu5h-" />
                    </div>
                    <div>
                        <h4 class="font-title-lg text-[16px]">Retno</h4>
                        <p class="font-label-md text-label-md text-on-surface-variant">UI/UX Designer</p>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-6 border-t border-outline-variant">
                <p class="font-label-md text-label-md text-on-surface-variant mb-4">Supported By</p>
                <div class="flex flex-wrap gap-4 opacity-70 grayscale hover:grayscale-0 transition-all">
                    <img alt="Logo Kota Semarang" class="h-10 w-auto object-contain"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDsNK7Y4YBdkJz3PyqCnKEVSSHVB0FCfvO46fEB4ayaoQV3bvxDffmZ1sW-RDdjIpGDHNj8x9BgBRlmiDMYb3-nPm-FPFiPcc48L430nH_MXKWCju6BZ01uP_PLs90zYvBlhQM1QWV5g72lGRNmavdRp1w_1F2hrtP7Bpw62QxhtcNIbf14NnyO2abYusIsjRHg-Y5p4Ho3kcOVhoaeOdKJq5ns_Pntu1hmpqgXzmQOw5uH4Z_kBBWP-aoTN2jgr8C6XVt6HaH12rN2" />
                    <div
                        class="h-10 w-10 bg-primary rounded-lg flex items-center justify-center font-bold text-white text-[10px] text-center px-1">
                        SATPOL PP</div>

                    <img alt="Logo Kota Semarang" class="h-10 w-auto object-contain"
                        src="{{ asset('images/x-gawe.png') }}" />
                </div>
            </div>
        </div>
    </aside>
    <!-- Visi Misi Section -->
    <div class="lg:col-span-12 grid grid-cols-1 md:grid-cols-2 gap-gutter mt-gutter">
        <div class="bg-surface-container-lowest rounded-2xl p-md border border-outline-variant card-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 bg-tertiary-fixed rounded-lg flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-tertiary-fixed-variant"
                        style="font-variation-settings: 'FILL' 1;">lightbulb</span>
                </div>
                <h3 class="font-title-lg text-title-lg">Vision</h3>
            </div>
            <p class="font-body-md text-body-md text-on-surface-variant">To become the leading force in the digital
                transformation of the Semarang City government through transparent, accountable, and information
                technology-based administrative management</p>
        </div>
        <div class="bg-surface-container-lowest rounded-2xl p-md border border-outline-variant card-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 bg-secondary-fixed rounded-lg flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-secondary-fixed-variant"
                        style="font-variation-settings: 'FILL' 1;">flag</span>
                </div>
                <h3 class="font-title-lg text-title-lg">Mission</h3>
            </div>
            <ul class="font-body-md text-body-md text-on-surface-variant space-y-2">
                <li class="flex gap-2"><span>•</span> Establishing orderly correspondence management.</li>
                <li class="flex gap-2"><span>•</span> Optimizing the utilization of IT resources.</li>
                <li class="flex gap-2"><span>•</span> Supporting Semarang Smart City.</li>
            </ul>
        </div>
    </div>
</div>

@endsection