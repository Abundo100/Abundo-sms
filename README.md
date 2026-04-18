<div align="center">

 <div style="background-color: #ffffff; border-radius: 16px; padding: 50px 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border: 1px solid #e1e8ed; max-width: 900px; margin: 20px auto;">
  <div style="font-size: 55px; margin-bottom: 10px; filter: drop-shadow(0 4px 6px rgba(0,0,0,0.1));">🏢</div>
  <h1 style="color: #1a1a1a; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif; font-size: 40px; font-weight: 700; margin: 0; letter-spacing: -1px;">Scholarship Management <span style="color: #3b82f6;">Portal</span></h1>
  <p style="color: #657786; font-size: 18px; margin-top: 10px; font-family: -apple-system, system-ui, sans-serif;">A secure, structured API handler for educational grant administration.</p>
  
  <div style="margin-top: 25px; display: flex; justify-content: center; gap: 8px;">
    <span style="background: #e0f2fe; color: #0369a1; padding: 6px 14px; border-radius: 8px; font-size: 12px; font-weight: 600; font-family: monospace; border: 1px solid #bae6fd;">v1.0.0</span>
    <span style="background: #d1fae5; color: #065f46; padding: 6px 14px; border-radius: 8px; font-size: 12px; font-weight: 600; font-family: monospace; border: 1px solid #a7f3d0;">BUILD: PASSING</span>
    <span style="background: #ede9fe; color: #5b21b6; padding: 6px 14px; border-radius: 8px; font-size: 12px; font-weight: 600; font-family: monospace; border: 1px solid #ddd6fe;">DEPS: UPDATED</span>
  </div>
</div>

<p>
  <a href="https://github.com/lecciones/Lecciones_Laravel1-IPT209">
    <img src="https://img.shields.io/badge/Developer-Jay_Ric_G._Lecciones-white?style=flat&logo=github&logoColor=181717&labelColor=f5f8fa&color=e1e8ed" alt="Developer" />
  </a>
  <img src="https://img.shields.io/badge/Course-BSIT_2D-white?style=flat&logo=googleclassroom&logoColor=5f6368&labelColor=f5f8fa&color=e1e8ed" alt="Course" />
</p>

<p align="center">
  <a href="https://github.com/lecciones/Lecciones_Laravel1-IPT209">
    <img src="https://img.shields.io/badge/VIEW_CODE-333?style=for-the-badge&logo=github&logoColor=white" />
  </a>
  <a href="https://www.postman.com/leccionesjayric-9321815/workspace/jay-ric-lecciones-s-workspace/collection/53548851-fe1acfe2-2c9d-474d-9fa8-a293aaf1d45f">
    <img src="https://img.shields.io/badge/API_DOCS-FF6C37?style=for-the-badge&logo=postman&logoColor=white" />
  </a>
</p>

</div>

---

## 🎯 Executive Summary

<div align="center">
  <table border="0" cellpadding="10" cellspacing="0" style="background-color: #ffffff; border-radius: 12px; border: 1px solid #e1e8ed; width: 100%; font-family: -apple-system, system-ui, sans-serif;">
    <tr style="background-color: #f5f8fa;">
      <th align="left" style="color: #657786; border-bottom: 1px solid #e1e8ed; padding: 15px;">System Attribute</th>
      <th align="left" style="color: #657786; border-bottom: 1px solid #e1e8ed; padding: 15px;">Configuration</th>
    </tr>
    <tr>
      <td style="padding: 15px; border-bottom: 1px solid #e1e8ed; color: #1a1a1a;"><strong>Title</strong></td>
      <td style="padding: 15px; border-bottom: 1px solid #e1e8ed; color: #1a1a1a;">Scholarship Management System</td>
    </tr>
    <tr>
      <td style="padding: 15px; border-bottom: 1px solid #e1e8ed; color: #1a1a1a;"><strong>Lead Developer</strong></td>
      <td style="padding: 15px; border-bottom: 1px solid #e1e8ed; color: #1a1a1a;">Jay Ric Lecciones</td>
    </tr>
    <tr>
      <td style="padding: 15px; color: #1a1a1a;"><strong>Core Framework</strong></td>
      <td style="padding: 15px; color: #1a1a1a;">
        <img src="https://img.shields.io/badge/Laravel-FF2D20?style=flat-square&logo=laravel&logoColor=white" alt="Laravel"/>
        <img src="https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white" alt="PHP"/>
      </td>
    </tr>
  </table>
</div>

---

## 🛠️ Technological Infrastructure

<div align="center">
  <img src="https://skillicons.dev/icons?i=laravel,php,mysql,postman,git,vscode&theme=light" />
</div>

---

## 📋 System Features & Implementation Queue

### 1.0 Infrastructure Modules
| Feature Set | Action Plan | Method | Status |
| :--- | :--- | :--- | :---: |
| **Authentication** | Secure Token Registration | `POST` | ✅ |
| | Stateful User Login | `POST` | ✅ |
| **User Access** | Paginated Account Listing | `GET` | ✅ |
| | New Account Provisioning | `POST` | ✅ |
| | Account Modification | `PUT/PATCH` | ✅ |

### 2.0 Operational Modules
| Feature Set | Action Plan | Method | Status |
| :--- | :--- | :--- | :---: |
| **Scholarships** | Grant Criteria Definition | `POST` | ✅ |
| | Program Lifecycle Update | `PUT/PATCH` | ✅ |
| **Applicants** | Student Profile Submission | `POST` | ✅ |
| | Eligibility Status Review | `PATCH` | ✅ |
| ***Reports** | Data Aggregation Summaries | `GET` | 🚧 |

---

## 📊 Database Entity Model

<div align="center">

| Model | Classification | Description | Status |
| :--- | :--- | :--- | :---: |
| **User** | Administrative | Accounts for system governors/staff | Active |
| **Role** | Configuration | Defined permission tiers (3 Tiers) | Active |
| **Scholarship** | Operational | Metadata for educational grants | Active |
| **Applicant** | Client Data | Student submission profiles | Active |

</div>

---

## 🔗 API Documentation (RESTful Schema)

<details>
<summary><b>🏠 Public Services (No Authentication)</b></summary>
<br>

| Method | Endpoint | Action |
| :--- | :--- | :--- |
| `POST` | `/api/register` | Initialize a new user profile |
| `POST` | `/api/login` | Authenticate credentials & receive token |
</details>

<details>
<summary><b>🔐 Protected Services (Requires Bearer Token)</b></summary>
<br>

*Header: `Authorization: Bearer {token}`*

#### User Administration
| Method | Endpoint | Description |
| :--- | :--- | :--- |
| `GET` | `/api/users` | Fetch all users (Paginated) |
| `POST` | `/api/users` | Create a new staff account |
| `PUT` | `/api/users/{id}` | Update account metadata |
| `DELETE` | `/api/users/{id}` | Terminate account access |
| `POST` | `/api/logout` | Revoke current token |

#### Scholarship Administration
| Method | Endpoint | Description |
| :--- | :--- | :--- |
| `GET` | `/api/scholarships` | List all grant programs |
| `POST` | `/api/scholarships` | Define new grant criteria |
| `PUT` | `/api/scholarships/{id}` | Update program requirements |
| `DELETE` | `/api/scholarships/{id}` | Remove scholarship program |

#### Applicant Lifecycle
| Method | Endpoint | Description |
| :--- | :--- | :--- |
| `GET` | `/api/applicants` | Index student submission queue |
| `POST` | `/api/applicants` | Process new student application |
| `PATCH` | `/api/applicants/{id}` | Modify status or eligibility |
| `DELETE` | `/api/applicants/{id}` | Purge applicant record |
</details>

---

<div align="center">

### 🤝 Professional Connection
<a href="mailto:ronbell.abarquez@cit.edu">
  <img src="https://img.shields.io/badge/Corporate_Email-D14836?style=flat&logo=gmail&logoColor=white&labelColor=c33" />
</a>
<a href="https://github.com/lecciones/Lecciones_Laravel1-IPT209">
  <img src="https://img.shields.io/badge/Developer_Profile-181717?style=flat&logo=github&logoColor=white" />
</a>

<br/>

<img src="https://capsule-render.vercel.app/api?type=waving&color=1a1a1a&height=80&section=footer" width="100%" />

**© 2026 Jay Ric G. Lecciones**
*Enterprise Scholarship Management Solution*

</div>