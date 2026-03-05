# e-Certify: E-Certificate Management & Verification System
**DICT Quezon 4A** | Prepared by: Bonje Alexander H. Manza, IT Intern | February 26, 2026

---

## Overview

A Laravel-based web application that automates the bulk generation, distribution, and public verification of e-certificates for DICT Quezon 4A training events.

---

## Core Features (MVP)

1. **Admin Authentication** — Secure login for DICT staff
2. **Training Event Management** — CRUD interface for events
3. **CSV Bulk Upload** — Parse and link participant data to events
4. **PDF Certificate Generation** — Map participant data to official DICT template
5. **QR Code Embedding** — Unique UUID per participant, stamped onto PDF
6. **Email Queue** — Automated background dispatch of certificates to participants
7. **Public Verification Portal** — Landing page to scan/validate QR codes against the database

---

## Technology Stack

| Layer | Technology |
|---|---|
| Backend | PHP 8.x + Laravel |
| Frontend | Laravel Livewire + HTML5, CSS3 |
| UI Framework | Bootstrap 5 |
| Database | MySQL / MariaDB |
| Local Development Environment | Laragon |
| PDF Generation | dompdf / laravel-snappy |
| QR Code | Simple QrCode |
| Email Delivery | Laravel Mail with SMTP |
| Background Processing | Laravel Queue |
| Version Control | Git/Github | 

---

## Target Users

- **DICT Admin** — Uploads participant data, manages events, triggers generation
- **Participants** — Receive certificates via email
- **Third-Party Verifiers** — Scan QR codes on the public portal to verify authenticity

---

## System Workflow

```
Admin uploads CSV
    → Parse & validate data
    → Generate UUID per participant
    → Generate QR Code
    → Map data to certificate template
    → Generate PDF
    → Store record in DB
    → Queue email job
    → Send certificate to participant

Third-Party Verifier scans QR Code
    → Redirect to public verification portal
    → Validate UUID against DB
    → Display verification result
```

---

## Implementation Timeline (8 Weeks)

| Week | Phase | Key Tasks |
|---|---|---|
| 1 | Planning & Setup | Requirements, DB schema, Laravel init, local env |
| 2 | Auth & Event Module | Admin login, Training Event CRUD |
| 3 | Data Ingestion | CSV upload, parsing, link to events |
| 4 | PDF Generation | PDF library integration, template mapping |
| 5 | QR Integration | UUID generation, QR stamping on PDFs |
| 6 | Email Automation | SMTP config, Laravel Jobs/Queues |
| 7 | Verification Portal | Public QR scan page, DB validation logic |
| 8 | Testing & Turnover | UAT with DICT staff, bug fixes, UI polish, handover |

---

## Required Assets (Request from DICT Office)

- [ ] High-resolution DICT logo (transparent PNG)
- [ ] Bagong Pilipinas logo (transparent PNG)
- [ ] Relevant program logos (transparent PNG)
- [ ] Digital e-signatures of approving authorities (transparent PNG)
- [ ] Standard blank certificate background template
- [ ] Access to staging environment (by Week 7)

---

## Scope & Limitations

**In Scope:**
- Admin authentication
- Bulk CSV participant upload
- PDF generation with QR code
- Automated email dispatch
- Public QR verification portal

**Out of Scope (MVP):**
- Online event registration
- Multiple certificate layout formats
- Analytics, facial recognition, or attendance tracking
