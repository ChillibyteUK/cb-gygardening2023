<?php
$datePosted = get_field('dateposted');
$title = get_field('title');
$description = get_field('description');
$addressRegion = get_field('addressregion');
$addressLocality = get_field('addresslocality') ?? null;
?>
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "JobPosting",
    "title": "<?=$title?>",
    "datePosted": "<?=$datePosted?>",
    "description": "<?=$description?>",
    "hiringOrganization": {
        "@type": "Organization",
        "name": "Grayshaw & Yeo Gardening Company",
        "sameAs": "https://www.gygardening.co.uk"
    },
    "employmentType": ["PART_TIME", "CONTRACTOR"],
    "qualifications": {
        "@type": "EducationalOccupationalCredential",
        "credentialCategory": "RHS Level 2 (or studying towards)",
        "about": "Horticulture",
        "recognizedBy": {
            "@type": "Organization",
            "name": "RHS",
            "url": "https://www.rhs.org.uk/"
        }
    },
    "experienceRequirements": {
        "@type": "OccupationalExperienceRequirements",
        "monthsOfExperience": "12"
    },
    "jobBenefits": "Company events, Employee mentoring programme, Flexitime",
    "jobLocation": {
        "@type": "Place",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "UK",
            "addressRegion": "<?=$addressRegion?>"
            <?php
            if ($addressLocality) {
                ?>
            ,
            "addressLocality": "<?=$addressLocality?>"
                <?php
            }
            ?>
        }
    },
    "jobLocationType": "ONSITE"
}
</script>