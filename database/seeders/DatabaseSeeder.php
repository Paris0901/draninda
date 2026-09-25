<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\SiteSetting;
use App\Models\TimelineMilestone;
use App\Models\Award;
use App\Models\ResearchPaper;
use App\Models\Protocol;
use App\Models\Initiative;
use App\Models\MediaAppearance;
use App\Models\Testimonial;
use App\Models\GalleryPhoto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Admin User
        User::updateOrCreate(
            ['email' => 'admin@dranindasidhana.com'],
            [
                'name' => 'Dr. Aninda Sidhana',
                'password' => Hash::make('password123'),
            ]
        );

        // 2. Site Settings
        $settings = [
            'hero_name' => 'Dr. Aninda Sidhana',
            'hero_kicker' => 'Rex Karmaveer Chakra UN Laureate · IPS Women Resilience Award · DHF Melbourne Selected · National President WICCI',
            'hero_tagline' => 'Scars to Stars — turning lived experience into healing for others.',
            'hero_subtitle' => 'Psychiatrist · Healthcare Systems Architect · Digital Health Innovator · National President, WICCI National Women\'s Mental Health Council · Founder, The Dignity Dialogues',
            'stats_years' => '15+',
            'stats_fellowship' => 'UN & DHF',
            'stats_award' => 'IPS Award',
            'stats_pro_bono' => '24/7',
            'bio_lead' => 'Dr. Aninda Sidhana is an Indian psychiatrist, healthcare systems architect, and digital health innovator serving as the National President of the WICCI National Women\'s Mental Health & Psychosocial Wellness Council.',
            'contact_email' => 'draninda30@gmail.com',
            'licensing_email' => 'minds@dranindasidhana.com',
            'location' => 'Sri Ganganagar, Rajasthan, India · Global',
            'baya_platform_title' => 'BAYA E Ai™ Digital Health',
            'baya_platform_desc' => 'Empathetic digital health application architected by Dr. Sidhana for pattern recognition, trauma tracking, and real-time psychiatric symptom monitoring. Selected for the elite Digital Health Future (DHF) Melbourne 2026 Accelerator.',
        ];

        foreach ($settings as $k => $v) {
            SiteSetting::set($k, $v);
        }

        // 3. Career Timeline & Academic Milestones
        $milestones = [
            [
                'period' => '2009',
                'title' => 'Medical Graduation (M.B.B.S.)',
                'organization' => 'D Y Patil Medical College (DY Patil University)',
                'location' => 'Navi Mumbai / Pune, India',
                'category' => 'Education',
                'badge' => 'MBBS Degree',
                'description' => 'Graduated with Bachelor of Medicine, Bachelor of Surgery (MBBS), establishing comprehensive clinical grounding in medical science, patient diagnostics, and holistic care.',
                'order_index' => 1,
            ],
            [
                'period' => '2010–2013',
                'title' => 'Postgraduate Specialization (M.D. Psychiatry)',
                'organization' => 'Mahatma Gandhi Medical College and Research Institute',
                'location' => 'Puducherry / India',
                'category' => 'Education',
                'badge' => 'Doctor of Medicine (M.D.)',
                'description' => 'Completed advanced postgraduate Doctor of Medicine (M.D.) residency in Psychiatry, conducting empirical studies on psychosexual health, psychiatric epidemiology, and biopsychosocial medicine.',
                'order_index' => 2,
            ],
            [
                'period' => '2013–2016',
                'title' => 'Senior Neuropsychiatry Residency',
                'organization' => 'Institute of Human Behaviour and Allied Sciences (IHBAS)',
                'location' => 'New Delhi, India',
                'category' => 'Clinical',
                'badge' => 'Apex Referral Center',
                'description' => 'Served as Senior Resident at India\'s apex tertiary neuropsychiatry center. Focused on emergency psychiatric triage, severe chronic psychopathology, de-addiction, and community mental health.',
                'order_index' => 3,
            ],
            [
                'period' => '2017–2018',
                'title' => 'Assistant Professor of Psychiatry',
                'organization' => 'Santosh Medical College and Hospital',
                'location' => 'Ghaziabad, NCR, India',
                'category' => 'Academic',
                'badge' => 'Medical Academia',
                'description' => 'Appointed Assistant Professor of Psychiatry, lecturing undergraduate and postgraduate medical trainees while spearheading clinical research and institutional mental health initiatives.',
                'order_index' => 4,
            ],
            [
                'period' => '2018–Present',
                'title' => 'Consultant Psychiatrist & Psychotherapist',
                'organization' => 'Yashoda Super Speciality Hospital & Tekchand Sidana Memorial Hospital',
                'location' => 'Ghaziabad & Sri Ganganagar, Rajasthan',
                'category' => 'Clinical',
                'badge' => 'Clinical Practice',
                'description' => 'Active clinical consultant specializing in Cognitive Behavioral Therapy (CBT), Post-Traumatic Growth (PTG), adolescent coaching, marital therapy, and female psychosexual medicine.',
                'order_index' => 5,
            ],
            [
                'period' => '2024',
                'title' => 'IPS Women Resilience Award & Josh Talks Feature',
                'organization' => 'Indian Psychiatric Society & Josh Talks',
                'location' => 'New Delhi & Global',
                'category' => 'Leadership',
                'badge' => 'National Honor',
                'description' => 'Honored with the IPS Women Resilience Award in New Delhi. Delivered widely celebrated viral talk "Overcoming the Unspoken: Redefining Resilience" on Josh Talks.',
                'order_index' => 6,
            ],
            [
                'period' => '2025',
                'title' => 'UN NGL Fellowship & MyndStories Essay',
                'organization' => 'International SDG Centre (iSDRC) / UN & MyndStories',
                'location' => 'Geneva / Global',
                'category' => 'Advocacy',
                'badge' => 'UN Fellowship',
                'description' => 'Selected as Next Generation Leadership Fellow (advancing to Impact Phase in 2026). Authored landmark essay "Rising from the ashes: A journey of resilience" for MyndStories.',
                'order_index' => 7,
            ],
            [
                'period' => 'Feb 2026',
                'title' => 'Appointed National President of WICCI Council',
                'organization' => 'Women\'s Indian Chamber of Commerce and Industry (WICCI)',
                'location' => 'National, India',
                'category' => 'Leadership',
                'badge' => 'National President',
                'description' => 'Appointed National President of the WICCI National Women\'s Mental Health & Psychosocial Wellness Council, leading nationwide policy drafting, corporate burnout reform, and survivor care.',
                'order_index' => 8,
            ],
            [
                'period' => '2026',
                'title' => 'Executive Leadership in IPS (North Zone) & IAPP',
                'organization' => 'Indian Psychiatric Society & Indian Association of Private Psychiatry',
                'location' => 'North Zone, India',
                'category' => 'Leadership',
                'badge' => 'Executive Office',
                'description' => 'Elected Honorary Assistant General Secretary of IPS (North Zone) and appointed Convener of the Sexual Medicine Committee for the Indian Association of Private Psychiatry (IAPP).',
                'order_index' => 9,
            ],
            [
                'period' => 'Apr 2026',
                'title' => 'Global Tech Validation — DHF Melbourne Accelerator',
                'organization' => 'Digital Health Future (DHF) Melbourne',
                'location' => 'Melbourne, Australia',
                'category' => 'Tech',
                'badge' => 'Global Tech Accelerator',
                'description' => 'BAYA E Ai platform selected for the prestigious Digital Health Future (DHF) Melbourne program, an elite global accelerator scaling empathetic AI-driven mental health technologies.',
                'order_index' => 10,
            ],
        ];

        foreach ($milestones as $m) {
            TimelineMilestone::create($m);
        }

        // 4. Awards & Honors
        $awards = [
            [
                'title' => 'Rex Karmaveer Chakra Bronze Medal',
                'bestowing_organization' => 'iCONGO & United Nations',
                'year' => '2025–2026',
                'category' => 'Global',
                'icon' => '🎖️',
                'field_of_recognition' => 'Systemic mental healthcare reform and global humanitarian design',
                'description' => 'Awarded by the International Confederation of NGOs (iCONGO) in partnership with the United Nations for structural contributions to psychosocial wellness and survivor-centric health policies.',
                'badge' => 'United Nations & iCONGO',
                'is_featured' => true,
                'order_index' => 1,
            ],
            [
                'title' => 'IPS Women Resilience Award',
                'bestowing_organization' => 'Indian Psychiatric Society (New Delhi)',
                'year' => '2024–2026',
                'category' => 'National',
                'icon' => '🏆',
                'field_of_recognition' => 'Outstanding resilience and clinical leadership in healthcare',
                'description' => 'National recognition by India\'s apex psychiatric body for transformative clinical practice, courage in breaking societal taboos, and advocacy for survivors.',
                'badge' => 'Apex Medical Honor',
                'is_featured' => true,
                'order_index' => 2,
            ],
            [
                'title' => 'SIG Lab: AI-Augmented Collective Intelligence Fellow',
                'bestowing_organization' => 'Social-Impact-Global / Valerie Won Lee',
                'year' => 'August–September 2026',
                'category' => 'Global',
                'icon' => '✨',
                'field_of_recognition' => 'AI, Diplomacy & Women\'s Global Peace',
                'description' => 'Selected as 1 of 24 global participants for the prestigious SIG Lab addressing "No Peace Without Women" with WomenTech Network, G100, and World Citizen Artists.',
                'badge' => '1 of 24 Globally',
                'is_featured' => true,
                'order_index' => 3,
            ],
            [
                'title' => 'Professional Distinction Honor',
                'bestowing_organization' => 'Marwah Studios',
                'year' => '2026',
                'category' => 'Media',
                'icon' => '🎬',
                'field_of_recognition' => 'Creative cross-industry innovation connecting media, film, and clinical psychiatry',
                'description' => 'Honored for pioneering the intersection of cinema and psychiatry through The Great Unburdening and Voices of Dignity campaigns.',
                'badge' => 'Media & Arts Distinction',
                'is_featured' => true,
                'order_index' => 4,
            ],
            [
                'title' => 'Medical Innovation Recognition',
                'bestowing_organization' => 'MedscapeIndia',
                'year' => '2026',
                'category' => 'Clinical',
                'icon' => '💡',
                'field_of_recognition' => 'Strategic medical innovation and advanced public healthcare leadership',
                'description' => 'Awarded for proprietary clinical IP frameworks including the Sidhana-Pattojoshi Protocol and BAYA E Ai digital health tracking architecture.',
                'badge' => 'Medical Innovation',
                'is_featured' => true,
                'order_index' => 5,
            ],
            [
                'title' => 'Unstoppable Beautiful Soul Award',
                'bestowing_organization' => 'Leaders of All Nations International (LOANI)',
                'year' => '2025',
                'category' => 'Global',
                'icon' => '🌸',
                'field_of_recognition' => 'Global social impact and trauma-informed public safety advocacy',
                'description' => 'International honor celebrating women leaders driving transformative change across health, equity, and human dignity.',
                'badge' => 'LOANI Global Honor',
                'is_featured' => false,
                'order_index' => 6,
            ],
            [
                'title' => 'News18 Sriganganagar Icon of Rajasthan Award',
                'bestowing_organization' => 'News18 Network',
                'year' => '2024',
                'category' => 'National',
                'icon' => '⭐',
                'field_of_recognition' => 'Excellence in regional healthcare delivery and community impact',
                'description' => 'State honor celebrating regional clinical leadership, community de-stigmatization campaigns, and mental health accessibility in Rajasthan.',
                'badge' => 'State Icon',
                'is_featured' => false,
                'order_index' => 7,
            ],
            [
                'title' => 'Woman of Substance Award',
                'bestowing_organization' => 'International Women\'s Month Summit',
                'year' => 'March 2022',
                'category' => 'National',
                'icon' => '💎',
                'field_of_recognition' => 'Grassroots community empowerment and women\'s psychosocial advocacy',
                'description' => 'Conferred in recognition of sustained dedication to women\'s psychological safety, domestic abuse support, and mental health awareness.',
                'badge' => 'Women Leadership',
                'is_featured' => false,
                'order_index' => 8,
            ],
            [
                'title' => 'Next Generation Leadership (NGL) Fellowship',
                'bestowing_organization' => 'International SDG Centre (iSDRC) / UN',
                'year' => '2025–2026',
                'category' => 'Global',
                'icon' => '🌍',
                'field_of_recognition' => 'UN SDG 5 & Global Mental Health Leadership',
                'description' => 'Selected as a global leadership fellow; advanced to the Impact Phase in mid-2026 advancing UN Sustainable Development Goals.',
                'badge' => 'UN SDG Ambassador',
                'is_featured' => false,
                'order_index' => 9,
            ],
        ];

        foreach ($awards as $a) {
            Award::create($a);
        }

        // 5. Research Papers & Publications
        $papers = [
            [
                'title' => 'Consciousness, Culture, Language & Mental Health',
                'journal' => 'Venetian Forum 2026 & Cultural Dialogues Series',
                'year' => '2026',
                'category' => 'Interdisciplinary Inquiry',
                'authors' => 'Scott Douglas Jacobsen, Franca Borgia & Dr. Aninda Sidhana',
                'description' => 'An international dialogue exploring cultural conditioning, root vocabulary, cognition, trauma, psychopathology, cognitive restructuring, and art\'s therapeutic value in clinical recovery.',
                'url' => 'https://scholar.google.com/scholar?q=Aninda+Sidana',
                'badge_color' => 'teal',
                'is_featured' => true,
                'order_index' => 1,
            ],
            [
                'title' => 'Staying Home is NOT \'Staying Safe\'',
                'journal' => 'Psychiatry and Clinical Neurosciences',
                'year' => '2021',
                'category' => 'Spousal Violence & Crisis',
                'authors' => 'Dr. Aninda Sidhana (Sidana) et al.',
                'description' => 'A rapid 8-day online survey on spousal violence against women during the COVID-19 lockdown in India, analyzing structural violence spikes and isolation factors.',
                'url' => 'https://scholar.google.com/scholar?q=Staying+home+is+NOT+staying+safe+Aninda+Sidana',
                'badge_color' => 'pink',
                'is_featured' => false,
                'order_index' => 2,
            ],
            [
                'title' => 'Opioid Abstinence & Male Sexual Functioning',
                'journal' => 'Journal of Psychosexual Health',
                'year' => '2024',
                'category' => 'Psychosexual Medicine',
                'authors' => 'Dr. Aninda Sidhana (Sidana) et al.',
                'description' => 'Effects of abstinence from opioids on sexual functioning in men with Opioid Use Disorder: An observational clinical study measuring endocrine and relational recovery.',
                'url' => 'https://scholar.google.com/scholar?q=Effects+of+Abstinence+from+Opioid+on+Sexual+Functioning+Aninda+Sidana',
                'badge_color' => 'teal',
                'is_featured' => false,
                'order_index' => 3,
            ],
            [
                'title' => 'Depression in Drug-Sensitive Tuberculosis Patients',
                'journal' => 'Indian Journal of Community Medicine',
                'year' => '2024',
                'category' => 'Public Mental Health',
                'authors' => 'Dr. Aninda Sidhana (Sidana) et al.',
                'description' => 'Prevalence and predictors of depression among drug-sensitive tuberculosis patients – A cross-sectional observational study across North Indian tertiary health centers.',
                'url' => 'https://scholar.google.com/scholar?q=Prevalence+and+Predictors+of+Depression+Among+Drug-Sensitive+Tuberculosis+Patients+Aninda+Sidana',
                'badge_color' => 'violet',
                'is_featured' => false,
                'order_index' => 4,
            ],
            [
                'title' => 'Immunological Interplay in Schizophrenia',
                'journal' => 'Annals of Psychiatric Research',
                'year' => '2024',
                'category' => 'Neuroimmunology',
                'authors' => 'Dr. Aninda Sidhana (Sidana) et al.',
                'description' => 'Evaluating the impact of Clozapine and Risperidone treatment on immune biomarker responses and neuroinflammatory cascades in schizophrenia.',
                'url' => 'https://scholar.google.com/scholar?q=Immunological+Interplay+in+Schizophrenia+Clozapine+Risperidone+Aninda+Sidana',
                'badge_color' => 'teal',
                'is_featured' => false,
                'order_index' => 5,
            ],
            [
                'title' => 'Alcohol Withdrawal Syndrome Cohort Study',
                'journal' => 'Journal of Clinical and Diagnostic Research',
                'year' => '2023',
                'category' => 'Addiction Psychiatry',
                'authors' => 'Dr. Aninda Sidhana (Sidana) et al.',
                'description' => 'Assessment of treatment patterns in patients with alcohol withdrawal syndrome during hospitalisation and post-discharge recovery phases.',
                'url' => 'https://scholar.google.com/scholar?q=Assessment+of+Treatment+Patterns+in+Patients+with+Alcohol+Withdrawal+Syndrome+Aninda+Sidana',
                'badge_color' => 'pink',
                'is_featured' => false,
                'order_index' => 6,
            ],
            [
                'title' => 'Disability Certification & Mental Retardation in NCT Delhi',
                'journal' => 'Indian Journal of Psychiatry',
                'year' => '2015',
                'category' => 'Epidemiology & Policy',
                'authors' => 'Dr. Aninda Sidhana (Sidana) et al.',
                'description' => 'A four-year analysis of patient certification characteristics for intellectual disability in NCT Delhi, informing regional public health disability policy.',
                'url' => 'https://scholar.google.com/scholar?q=Characteristics+of+the+patients+certified+for+disability+due+to+mental+retardation+Aninda+Sidana',
                'badge_color' => 'violet',
                'is_featured' => false,
                'order_index' => 7,
            ],
            [
                'title' => 'The Sidhana-Pattojoshi Protocol for Clinical Evaluation',
                'journal' => 'Journal of Psychiatric Research Context',
                'year' => '2025',
                'category' => 'Clinical Protocols',
                'authors' => 'Dr. Aninda Sidhana & Dr. Amrit Pattojoshi',
                'description' => 'Standardizing narrative-driven, patient-centric psychiatric assessments and relational trauma evaluations in clinical settings.',
                'url' => 'https://scholar.google.com/scholar?q=Sidhana+Pattojoshi+Protocol',
                'badge_color' => 'teal',
                'is_featured' => true,
                'order_index' => 8,
            ],
        ];

        foreach ($papers as $p) {
            ResearchPaper::create($p);
        }

        // 6. Clinical Protocols
        $protocols = [
            [
                'protocol_number' => 'Protocol I',
                'title' => 'The MINDWEAVE Framework™',
                'slug' => 'mindweave',
                'subtitle' => 'Trauma Recovery Architecture & Somatic Grounding',
                'category' => 'Trauma Recovery',
                'icon' => '🧠',
                'summary' => 'A multi-tiered methodology for complex trauma recovery that weaves cognitive clarity, somatic grounding, and relational safety into daily resilience.',
                'theoretical_foundation' => 'Traditional trauma recovery models often fail during acute dysregulation because they rely heavily on verbal processing when prefrontal executive functions are temporarily compromised. MINDWEAVE establishes an interlocking daily routine bridging neurobiological grounding with relational safety.',
                'pillars' => [
                    ['title' => 'Mastering Thoughts (Cognitive Restructuring)', 'desc' => 'Structured self-inquiry protocols that separate acute emotional flashbacks from present-day reality testing.'],
                    ['title' => 'Integrating Self-Care (Somatic Grounding)', 'desc' => 'Immediate sensory re-orienting techniques that interrupt hyperarousal and sympathetic nervous system loops within 90 seconds.'],
                    ['title' => 'Nurturing Networks (Relational Safety Anchoring)', 'desc' => 'Identifying and mapping interpersonal safe zones, establishing clear boundary communication without triggering attachment panic.'],
                    ['title' => 'Developing Resilience (Adaptive Mechanics)', 'desc' => 'Micro-habits and daily environmental modifications that reinforce neural pathways associated with self-agency and calm.'],
                ],
                'clinical_guidelines' => 'Designed for direct integration into psychiatric treatment plans, outpatient group therapy, and institutional wellness programs under institutional license.',
                'co_architect' => 'Dr. Aninda Sidhana & Dr. Amrit Pattojoshi',
                'licensing_scope' => 'Available for clinical psychology departments, trauma rehabilitation centers, and psychiatric hospitals.',
                'order_index' => 1,
            ],
            [
                'protocol_number' => 'Protocol II',
                'title' => 'The Dignity Dialogues™',
                'slug' => 'dignity',
                'subtitle' => 'Survivor Narrative Capital & Structural Safety',
                'category' => 'Public Health Architecture',
                'icon' => '🗣️',
                'summary' => 'Reframing survivor coping through silent safety scanning algorithms, self-talk scaffolding, and narrative control as public health architecture.',
                'theoretical_foundation' => 'Survivors of domestic abuse and coercive control often experience severe narrative dispossession. The Dignity Dialogues protocol provides a clinical framework that restores narrative ownership, treating lived survivor wisdom as crucial intelligence for public health prevention.',
                'pillars' => [
                    ['title' => 'Silent Safety Scanning Algorithms', 'desc' => 'Training survivors and clinicians to recognize subtle non-verbal indicators of escalating interpersonal danger before overt violence occurs.'],
                    ['title' => 'Self-Talk Scaffolding', 'desc' => 'Systematic cognitive restructuring that replaces internalized abuser voice and trauma-bonding guilt with grounded self-advocacy.'],
                    ['title' => 'Narrative Control Protocols', 'desc' => 'Guidelines for safely sharing testimony in judicial, medical, and media settings without triggering re-traumatization.'],
                    ['title' => 'Community Listening Circles', 'desc' => 'Peer-facilitated group structures that transform isolated healing into collective resilience and solidarity networks.'],
                ],
                'clinical_guidelines' => 'Implemented across digital hubs and physical speaking series across India, impacting thousands of mental health professionals, legal advocates, and survivors.',
                'co_architect' => 'Dr. Aninda Sidhana & Dr. Amrit Pattojoshi',
                'licensing_scope' => 'Licensed for corporate wellness, NGOs, universities, and public health campaigns.',
                'order_index' => 2,
            ],
            [
                'protocol_number' => 'Protocol III',
                'title' => 'The PMDD Partner Button™',
                'slug' => 'pmdd',
                'subtitle' => 'Relational & Neuroendocrine Ethics',
                'category' => 'Relational Neurobiology',
                'icon' => '⭕',
                'summary' => 'Automated relational luteal sync protocols and couples communication scripting designed to eliminate the emotional information gap during severe PMDD cycles.',
                'theoretical_foundation' => 'Premenstrual Dysphoric Disorder (PMDD) creates profound neuroendocrine shifts that lead to acute interpersonal friction. During luteal phase drops in allopregnanolone, verbal explanation becomes emotionally taxing. This protocol replaces the burden of explanation with structured, pre-agreed relational cues.',
                'pillars' => [
                    ['title' => 'Luteal Phase Synchronization', 'desc' => 'Automated notification protocols alerting partners to the onset of neuroendocrine vulnerability windows.'],
                    ['title' => 'De-escalation Communication Scripting', 'desc' => 'A curated library of pre-scripted phrases for partners that validate biological distress without engaging in cognitive debates.'],
                    ['title' => 'Relational Safety Boundaries', 'desc' => 'Pre-established agreements on temporary solitude, parenting adjustments, and decision-making deferrals during acute luteal days.'],
                    ['title' => 'Post-Cycle Reconnection Protocols', 'desc' => 'Structured debriefing templates deployed once hormonal baseline returns, ensuring mutual emotional repair without guilt.'],
                ],
                'clinical_guidelines' => 'Deploys partner scripts such as: "I recognize that your nervous system is navigating a severe PMDD shift right now. I am here to handle tasks and give you complete safety and rest."',
                'co_architect' => 'Dr. Aninda Sidhana & Dr. Amrit Pattojoshi',
                'licensing_scope' => 'Licensed for couples therapy clinics, gynecological counseling units, and health tracking apps.',
                'order_index' => 3,
            ],
            [
                'protocol_number' => 'Protocol IV',
                'title' => 'The Healing Justice Toolkit™',
                'slug' => 'healing',
                'subtitle' => 'Institutional Safeguarding & Abuse Detection Protocol',
                'category' => 'Institutional Safeguarding',
                'icon' => '🛡️',
                'summary' => 'Comprehensive institutional safeguarding featuring the Narcissist’s Playbook detection protocol (Love Bombing, Gaslighting, Triangulation), UN PSEA structural pillars, and proprietary mnemonics (EMPOWER, GENDER, MARD).',
                'theoretical_foundation' => 'Coercive control and narcissistic abuse follow highly predictable behavioral architectures whether occurring within intimate partnerships, executive boardrooms, or institutions. Dr. Sidhana provides a diagnostic matrix to identify abuse before systemic harm occurs.',
                'pillars' => [
                    ['title' => 'The Narcissist’s Playbook Detection', 'desc' => 'Identifying Idealization & Love Bombing, Gaslighting & Reality Erosion, and Triangulation & Isolation across interpersonal and workplace environments.'],
                    ['title' => 'E.M.P.O.W.E.R. Framework', 'desc' => 'Evaluate Risk, Map Boundaries, Protect Peace, Observe Patterns, Witness Truth, Educate Networks, Reclaim Agency.'],
                    ['title' => 'G.E.N.D.E.R. Safeguarding Matrix', 'desc' => 'Grounded Safety, Equity Audits, Narrative Ownership, Dismantle Stigma, Empower Networks, Restore Dignity.'],
                    ['title' => 'M.A.R.D. Relational Ethics', 'desc' => 'Mutual Respect, Accountability, Relational Ethics, Decentred Ego in male allyship and leadership workshops.'],
                ],
                'clinical_guidelines' => 'Deploys actionable metrics for HR leaders, legal counsel, hospital ethics boards, and survivor counselors.',
                'co_architect' => 'Dr. Aninda Sidhana & Dr. Amrit Pattojoshi',
                'licensing_scope' => 'Licensed for corporate HR governance, NGO safeguarding frameworks, and healthcare systems.',
                'order_index' => 4,
            ],
            [
                'protocol_number' => 'Protocol V',
                'title' => 'The WINGS Framework™',
                'slug' => 'wings',
                'subtitle' => 'Global Survivor Emancipation & Long-Term Resilience',
                'category' => 'Global Survivor Intervention',
                'icon' => '🕊️',
                'summary' => 'A 5-phase roadmap for survivor emancipation that integrates clinical trauma psychiatry with socio-economic empowerment to prevent re-victimization and build long-term resilience.',
                'theoretical_foundation' => 'While acute crisis intervention saves lives during intimate partner violence (IPV), long-term survivor recovery requires structural scaffolding that prevents economic dependency and re-traumatization.',
                'pillars' => [
                    ['title' => 'Wisdom Recognition', 'desc' => 'Validating the survivor\'s internal survival strategies and historical resilience as the primary foundation for recovery.'],
                    ['title' => 'Interventional Safety Planning', 'desc' => 'Multi-layered digital, physical, and legal security protocols tailored to high-risk environments.'],
                    ['title' => 'Narrative Restructuring', 'desc' => 'Replacing institutional victim labels with empowered authorship of one\'s future and identity.'],
                    ['title' => 'Grounded Community Reintegration', 'desc' => 'Connecting survivors with vocational training, financial literacy, and supportive peer solidarity networks.'],
                    ['title' => 'Sustained Leadership & Advocacy', 'desc' => 'Creating pathways for recovered survivors to become mentors, policy advisors, and community leaders.'],
                ],
                'clinical_guidelines' => 'Directly aligned with UN Sustainable Development Goals 5 (Gender Equality) and 3 (Good Health and Well-being).',
                'co_architect' => 'Dr. Aninda Sidhana & Dr. Amrit Pattojoshi',
                'licensing_scope' => 'Licensed by women\'s advocacy councils, healthcare systems, and international NGOs.',
                'order_index' => 5,
            ],
        ];

        foreach ($protocols as $pr) {
            Protocol::create($pr);
        }

        // 7. Founder Initiatives & Public Movements
        $initiatives = [
            [
                'title' => 'BAYA E Ai™ Digital Health',
                'badge' => 'Global Tech Accelerator · Melbourne 2026',
                'tagline' => 'Empathetic AI & Real-Time Symptom Monitoring',
                'description' => 'Dedicated digital health application architected by Dr. Sidhana for empathetic wellness tracking, pattern recognition, and real-time psychiatric symptom monitoring. Selected for the elite Digital Health Future (DHF) Melbourne 2026 program.',
                'url' => '#baya-ai',
                'category' => 'Tech Innovation',
                'card_theme' => 'dd',
                'order_index' => 1,
            ],
            [
                'title' => 'Aura Stadia & Safe Stadium Safe Minds (FIFA)',
                'badge' => 'Sports & Mass Psychology Infrastructure',
                'tagline' => 'Neuro-Clinical Infrastructure for Global Arenas',
                'description' => 'Pioneered the Aura Stadia concept and the "Safe Stadium Safe Minds" program for FIFA, introducing mass crowd psychology metrics, environmental design safety, and psychosocial well-being protocols into major global sporting venues.',
                'url' => '#aura-stadia',
                'category' => 'Sports & Mass Psychology',
                'card_theme' => 'sm',
                'order_index' => 2,
            ],
            [
                'title' => 'The Dignity Dialogues & Voices of Dignity',
                'badge' => 'Survivor Narrative Capital & Media Hub',
                'tagline' => 'Transforming Private Trauma into Collective Healing',
                'description' => 'Survivor-centered media campaign and digital hub utilizing listening circles and narrative tracking to humanize psychiatric concepts. In tandem, Dr. Sidhana maintains a lifetime, 24/7 pro bono crisis commitment for gender-based violence survivors.',
                'url' => 'https://dignity-dialogues-hub.lovable.app/',
                'category' => 'Survivor Movement',
                'card_theme' => 'dd',
                'order_index' => 3,
            ],
            [
                'title' => 'The Great Unburdening / Decade of Voices',
                'badge' => 'National Cinema & Maternal Health Campaign',
                'tagline' => 'Maternal Mental Health as Brain Capital',
                'description' => 'A national multimedia campaign produced in collaboration with media filmmaker Raaj Rahi for Mother\'s Day 2026, reframing maternal mental health as a core economic pillar of societal "brain capital" and healing justice.',
                'url' => '#media',
                'category' => 'Media & Cinema',
                'card_theme' => 'sm',
                'order_index' => 4,
            ],
            [
                'title' => 'The Suicide Prevention Toolkit',
                'badge' => 'Localized Practical Intervention Guide',
                'tagline' => 'Evidence-Based Framework for Institutions & Corporates',
                'description' => 'A localized, practical intervention resource guide launched in April 2026 for public, corporate, and institutional deployment, providing actionable crisis response protocols.',
                'url' => '#initiatives',
                'category' => 'Public Health',
                'card_theme' => 'dd',
                'order_index' => 5,
            ],
            [
                'title' => 'Corporate Burnout & Presenteeism Reform',
                'badge' => 'WICCI National Workplace Wellness Mandate',
                'tagline' => 'Dismantling Workplace Toxicity & "Love Bombing"',
                'description' => 'Targeting systemic workplace toxicity, high-performer burnout, professional "love bombing" dynamics, and corporate presenteeism (being digitally present while functionally incapacitated by exhaustion).',
                'url' => 'https://www.wicciminds.com',
                'category' => 'Corporate Reform',
                'card_theme' => 'sm',
                'order_index' => 6,
            ],
        ];

        foreach ($initiatives as $i) {
            Initiative::create($i);
        }

        // 8. Media Appearances & Podcasts
        $media = [
            [
                'title' => 'The Mind Unspoken — Women, Trauma & Taboo (S2 Ep 104)',
                'show_name' => 'The AboutHer Show',
                'host' => 'Sangeeta Relan',
                'media_type' => 'Podcast',
                'description' => 'Dr. Sidhana breaks down the psychological impact of spousal abuse, psychosexual healing, and building emotional resilience for women.',
                'spotify_url' => 'https://open.spotify.com/search/Dr.%20Aninda%20Sidhana',
                'apple_url' => 'https://podcasts.apple.com/search?term=Aninda%20Sidhana',
                'youtube_url' => 'https://www.youtube.com/results?search_query=Dr+Aninda+Sidhana+AboutHer',
                'badge_color' => 'teal',
                'is_featured' => true,
                'order_index' => 1,
            ],
            [
                'title' => 'Simplifying Psychiatry & Eradicating Stigma in India',
                'show_name' => 'The Guiding Voice (TGV Hindi)',
                'host' => 'Naveen Samala',
                'media_type' => 'Podcast',
                'description' => 'A Hindi-language feature simplifying complex mental health topics, relational boundaries, and community support systems.',
                'spotify_url' => 'https://open.spotify.com/search/Dr.%20Aninda%20Sidhana',
                'apple_url' => 'https://podcasts.apple.com/search?term=Aninda%20Sidhana',
                'youtube_url' => 'https://www.youtube.com/results?search_query=Dr+Aninda+Sidhana+TGV',
                'badge_color' => 'pink',
                'is_featured' => true,
                'order_index' => 2,
            ],
            [
                'title' => 'The Psychiatrist Who Survived: Narcissism & Abuse Recovery',
                'show_name' => 'World\'s Mayor Experience',
                'host' => 'Joshua T. Berglan',
                'media_type' => 'Podcast',
                'description' => 'An international conversation on surviving domestic violence, deconstructing toxic narcissism, and mobilizing men for gender justice.',
                'spotify_url' => 'https://open.spotify.com/search/Dr.%20Aninda%20Sidhana',
                'apple_url' => 'https://podcasts.apple.com/search?term=Aninda%20Sidhana',
                'youtube_url' => 'https://www.youtube.com/results?search_query=Dr+Aninda+Sidhana+Berglan',
                'badge_color' => 'violet',
                'is_featured' => true,
                'order_index' => 3,
            ],
            [
                'title' => 'Breaking the Silence: Mental Health & Sexual Wellness',
                'show_name' => 'The Supreet Singh Show',
                'host' => 'Supreet Singh',
                'media_type' => 'Broadcast Video',
                'description' => 'Dismantling public stigmas surrounding psychiatric care, narcissistic abuse, relational dependency, and psychosexual health in India.',
                'youtube_url' => 'https://youtu.be/SNdhZGyYlHQ',
                'badge_color' => 'teal',
                'is_featured' => false,
                'order_index' => 4,
            ],
            [
                'title' => 'Overcoming the Unspoken: Redefining Resilience',
                'show_name' => 'Josh Talks 2024',
                'host' => 'Josh Talks',
                'media_type' => 'Viral Keynote Talk',
                'description' => 'A powerful personal narrative on navigating adversity, divorce, domestic abuse, and leveraging lived personal trauma to build deeper clinical empathy.',
                'youtube_url' => 'https://www.youtube.com/results?search_query=Dr+Aninda+Sidhana+Josh+Talks',
                'badge_color' => 'pink',
                'is_featured' => true,
                'order_index' => 5,
            ],
        ];

        foreach ($media as $med) {
            MediaAppearance::create($med);
        }

        // 9. Testimonials
        $testimonials = [
            [
                'author_name' => 'Dr. Roop Sidana',
                'author_role' => 'Psychiatrist & Clinical Director · 40+ Years in Psychiatry',
                'initials' => 'RS',
                'quote' => 'It is a privilege and matter of great pride to recommend Dr. Aninda Sidhana — a psychiatrist, psychosexual medicine specialist, and a fierce advocate for mental health awareness, gender equality, and survivor rights.',
                'order_index' => 1,
            ],
            [
                'author_name' => 'Dr. Harish Shetty',
                'author_role' => 'Psychiatrist, Dr L. H. Hiranandani Hospital · Mentor',
                'initials' => 'HS',
                'quote' => 'Congratulations for a fighter, determined to fight violence & protect human rights of all, especially women. Three cheers!',
                'order_index' => 2,
            ],
            [
                'author_name' => 'Dr. Sidhesh Phaldessai',
                'author_role' => 'Private Psychiatrist & Tech Innovator · MBBS, MD, MRCPsych, FRANZCP',
                'initials' => 'SP',
                'quote' => 'Dr. Aninda Sidhana is not only an excellent psychiatrist but also a genuinely compassionate human being. Her commitment to social causes and digital innovation sets her apart in modern mental health.',
                'order_index' => 3,
            ],
            [
                'author_name' => 'Asif Kabani',
                'author_role' => 'Sr. Fellow, UN · Executive Director, SDG Center, Geneva',
                'initials' => 'AK',
                'quote' => 'For production houses and policy councils seeking authentic, research-backed depictions of trauma, resilience, and human dignity, Dr. Sidhana\'s voice is irrefutable. She scripts a Bharat that heals as it entertains.',
                'order_index' => 4,
            ],
            [
                'author_name' => 'First Lady Swinton',
                'author_role' => 'First Lady, Hunnic Matinecock Tribal Nation · Host, CrownCast',
                'initials' => 'FS',
                'quote' => 'She brings a rare combination of clinical excellence, cultural sensitivity, and deep empathy — a true global advocate for compassionate care and trauma recovery.',
                'order_index' => 5,
            ],
        ];

        foreach ($testimonials as $t) {
            Testimonial::create($t);
        }

        // 10. Photo Gallery & Event Memories
        $gallery = [
            [
                'title' => 'UN Rex Karmaveer Chakra Bronze Medal Conferment',
                'event_name' => 'iCONGO & United Nations Global Awards',
                'category' => 'Award Ceremonies',
                'image_path' => 'assets/images/gallery-1.jpg',
                'caption' => 'Conferment of the Rex Karmaveer Chakra UN Laureate Medal for systemic mental health reform and survivor advocacy.',
                'year' => '2025–2026',
                'order_index' => 1,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'WICCI National Mental Health Leadership Convention',
                'event_name' => 'WICCI National Council Summit',
                'category' => 'WICCI Conventions',
                'image_path' => 'assets/images/gallery-2.jpg',
                'caption' => 'Leading national dialogues on workplace mental health mandates, corporate burnout, and executive well-being.',
                'year' => '2024',
                'order_index' => 2,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Indian Psychiatric Society (IPS) National Forum',
                'event_name' => 'IPS Women Resilience Recognition',
                'category' => 'Clinical & Speaking',
                'image_path' => 'assets/images/gallery-3.jpg',
                'caption' => 'Presented clinical breakthroughs in psychosexual medicine, complex trauma restructuring, and clinical ethics.',
                'year' => '2024',
                'order_index' => 3,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Marwah Studios Creative Distinction Ceremony',
                'event_name' => 'Media & Cinema Distinction 2026',
                'category' => 'Award Ceremonies',
                'image_path' => 'assets/images/gallery-4.jpg',
                'caption' => 'Honored for bridging cinema, maternal health, and clinical psychiatry in The Great Unburdening.',
                'year' => '2026',
                'order_index' => 4,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Josh Talks National Keynote Series',
                'event_name' => 'Overcoming the Unspoken Talk',
                'category' => 'Clinical & Speaking',
                'image_path' => 'assets/images/gallery-5.jpg',
                'caption' => 'Delivering the viral keynote on transforming lived adversity into healing justice and clinical empathy.',
                'year' => '2024',
                'order_index' => 5,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'SIG Lab Fellow: AI, Diplomacy & Women’s Peace',
                'event_name' => 'Social-Impact-Global Forum',
                'category' => 'UN & Global Summits',
                'image_path' => 'assets/images/gallery-6.jpg',
                'caption' => 'Global collaborative intelligence session advancing UN SDG 5 and women’s leadership in conflict zones.',
                'year' => '2026',
                'order_index' => 6,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Tekchand Sidana Memorial Hospital Clinical Rounds',
                'event_name' => 'Community Healthcare Legacy',
                'category' => 'Clinical & Speaking',
                'image_path' => 'assets/images/gallery-7.jpg',
                'caption' => 'Continuing 50+ years of community healthcare excellence and 24/7 crisis psychiatric care.',
                'year' => '2025',
                'order_index' => 7,
                'is_featured' => true,
                'is_active' => true,
            ],
        ];

        foreach ($gallery as $g) {
            GalleryPhoto::create($g);
        }
    }
}
