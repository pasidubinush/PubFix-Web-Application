<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PubFix Professional Workspace</title>

    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
</head>
<style>
.pubfix-worker {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  position: relative;
  background-color: #f8f7f2;
}

.pubfix-worker .workspace-navigation {
  height: 88px;
  align-items: center;
  justify-content: space-between;
  padding: 0px 32px;
  width: 100%;
  background-color: #ffffff;
  border-bottom-width: 1px;
  border-bottom-style: solid;
  border-color: #dfe3d9;
  display: flex;
  position: relative;
  align-self: stretch;
}

.pubfix-worker .brand-and-workspace {
  display: inline-flex;
  align-items: center;
  gap: 32px;
  position: relative;
  flex: 0 0 auto;
}

.pubfix-worker .goodhands {
  display: inline-flex;
  align-items: center;
  gap: 9px;
  position: relative;
  flex: 0 0 auto;
}

.pubfix-worker .brand-mark {
  display: flex;
  width: 34px;
  height: 36px;
  align-items: center;
  justify-content: center;
  position: relative;
  background-color: #25664d;
  border-radius: 10px;
  overflow: hidden;
}

.pubfix-worker .hand-heart {
  position: relative;
  width: 24px;
  height: 24px;
}

.pubfix-worker .vector {
  position: absolute;
  width: 93.75%;
  height: 89.58%;
  top: 10.42%;
  left: 6.25%;
}

.pubfix-worker .brand-name {
  position: relative;
  width: fit-content;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: transparent;
  font-size: 25px;
  letter-spacing: -0.28px;
  line-height: normal;
  white-space: nowrap;
}

.pubfix-worker .text-wrapper {
  color: #1e3329;
  letter-spacing: -0.07px;
}

.pubfix-worker .span {
  color: #26c33e;
  letter-spacing: -0.07px;
}

.pubfix-worker .status {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  padding: 6px 10px;
  position: relative;
  flex: 0 0 auto;
  background-color: #eaf0e6;
  border-radius: 100px;
  overflow: hidden;
}

.pubfix-worker .status-label {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-SemiBold", Helvetica;
  font-weight: 600;
  color: #25664d;
  font-size: 11px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.pubfix-worker .account-tools {
  display: inline-flex;
  align-items: center;
  gap: 25px;
  position: relative;
  flex: 0 0 auto;
}

.pubfix-worker .notifications {
  display: flex;
  width: 24px;
  height: 30px;
  align-items: center;
  position: relative;
}

.pubfix-worker .bell {
  position: relative;
  width: 21px;
  height: 21px;
}

.pubfix-worker .img {
  position: absolute;
  width: 89.88%;
  height: 94.05%;
  top: 5.95%;
  left: 10.12%;
}

.pubfix-worker .unread-dot {
  position: absolute;
  top: 3px;
  left: 16px;
  width: 7px;
  height: 7px;
  background-color: #a15840;
  border-radius: 6px;
}

.pubfix-worker .avatar {
  position: relative;
  width: 39px;
  height: 39px;
  object-fit: cover;
}

.pubfix-worker .signed-in {
  display: inline-flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 4px;
  position: relative;
  flex: 0 0 auto;
}

.pubfix-worker .name {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-SemiBold", Helvetica;
  font-weight: 600;
  color: #1e3329;
  font-size: 13px;
  letter-spacing: 0;
  line-height: normal;
}

.pubfix-worker .div {
  position: relative;
  width: fit-content;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #69736b;
  font-size: 10px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.pubfix-worker .chevron-down {
  position: relative;
  width: 16px;
  height: 16px;
}

.pubfix-worker .vector-2 {
  position: absolute;
  width: 78.12%;
  height: 65.62%;
  top: 34.38%;
  left: 21.88%;
}

.pubfix-worker .professional {
  display: flex;
  align-items: flex-start;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
}

.pubfix-worker .workspace-sidebar {
  flex-direction: column;
  width: 220px;
  align-items: flex-start;
  gap: 26px;
  padding: 30px 18px;
  background-color: #ffffff;
  border-right-width: 1px;
  border-right-style: solid;
  border-color: #dfe3d9;
  display: flex;
  position: relative;
  align-self: stretch;
}

.pubfix-worker .main-menu {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 8px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
}

.pubfix-worker .navigation-item {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 14px 13px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
  border-radius: 8px;
  overflow: hidden;
}

.pubfix-worker .vector-wrapper {
  position: relative;
  width: 18px;
  height: 18px;
}

.pubfix-worker .vector-3 {
  position: absolute;
  width: 90.28%;
  height: 90.28%;
  top: 9.72%;
  left: 9.72%;
}

.pubfix-worker .label {
  position: relative;
  flex: 1;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #69736b;
  font-size: 12px;
  letter-spacing: 0;
  line-height: normal;
}

.pubfix-worker .navigation-item-2 {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 14px 13px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
  background-color: #eaf0e6;
  border-radius: 8px;
  overflow: hidden;
}

.pubfix-worker .vector-4 {
  position: absolute;
  width: 94.45%;
  height: 86.11%;
  top: 13.89%;
  left: 5.55%;
}

.pubfix-worker .label-2 {
  flex: 1;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #25664d;
  font-size: 12px;
  letter-spacing: 0;
  position: relative;
  line-height: normal;
}

.pubfix-worker .text-wrapper-2 {
  position: relative;
  width: fit-content;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #25664d;
  font-size: 10px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.pubfix-worker .vector-5 {
  position: absolute;
  width: 90.28%;
  height: 94.45%;
  top: 5.55%;
  left: 9.72%;
}

.pubfix-worker .vector-6 {
  position: absolute;
  width: 94.45%;
  height: 94.45%;
  top: 5.55%;
  left: 5.55%;
}

.pubfix-worker .divider {
  position: relative;
  align-self: stretch;
  width: 100%;
  height: 1px;
  background-color: #dfe3d9;
}

.pubfix-worker .profile-menu {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 22px;
  align-self: stretch;
  width: 100%;
  position: relative;
  flex: 0 0 auto;
}

.pubfix-worker .profile-navigation {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 0px 0px 0px 13px;
  position: relative;
  flex: 0 0 auto;
}

.pubfix-worker .img-wrapper {
  position: relative;
  width: 17px;
  height: 17px;
}

.pubfix-worker .vector-7 {
  position: absolute;
  width: 86.27%;
  height: 90.44%;
  top: 9.56%;
  left: 13.73%;
}

.pubfix-worker .text-wrapper-3 {
  width: fit-content;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #69736b;
  font-size: 12px;
  letter-spacing: 0;
  position: relative;
  line-height: normal;
}

.pubfix-worker .vector-8 {
  position: absolute;
  width: 86.27%;
  height: 94.61%;
  top: 5.39%;
  left: 13.73%;
}

.pubfix-worker .vector-9 {
  position: absolute;
  width: 90.26%;
  height: 94.53%;
  top: 5.47%;
  left: 9.74%;
}

.pubfix-worker .dashboard-content {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 28px;
  padding: 32px;
  position: relative;
  flex: 1;
  flex-grow: 1;
}

.pubfix-worker .div-2 {
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
}

.pubfix-worker .greeting {
  display: inline-flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 9px;
  position: relative;
  flex: 0 0 auto;
}

.pubfix-worker .date {
  margin-top: -1px;
  font-family: "Inter-SemiBold", Helvetica;
  font-weight: 600;
  color: #69736b;
  font-size: 11px;
  letter-spacing: 0.11px;
  white-space: nowrap;
  position: relative;
  width: fit-content;
  line-height: normal;
}

.pubfix-worker .greeting-title {
  position: relative;
  width: fit-content;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #1e3329;
  font-size: 34px;
  letter-spacing: -0.48px;
  line-height: normal;
}

.pubfix-worker .summary {
  position: relative;
  width: fit-content;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #69736b;
  font-size: 14px;
  letter-spacing: 0;
  line-height: normal;
}

.pubfix-worker .availability-control {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 13px;
  position: relative;
  flex: 0 0 auto;
  background-color: #ffffff;
  border-radius: 8px;
  overflow: hidden;
  border: 1px solid;
  border-color: #dfe3d9;
}

.pubfix-worker .online-indicator {
  position: relative;
  width: 7px;
  height: 7px;
  background-color: #25664d;
  border-radius: 6px;
}

.pubfix-worker .availability-label {
  position: relative;
  width: fit-content;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #25664d;
  font-size: 12px;
  letter-spacing: 0;
  line-height: normal;
}

.pubfix-worker .availability-toggle {
  position: relative;
  width: 32px;
  height: 19px;
  background-color: #25664d;
  border-radius: 15px;
  overflow: hidden;
}

.pubfix-worker .toggle-handle {
  position: relative;
  top: 3px;
  left: 15px;
  width: 13px;
  height: 13px;
  background-color: #ffffff;
  border-radius: 10px;
}

.pubfix-worker .performance-overview {
  display: flex;
  align-items: flex-start;
  gap: 16px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
}

.pubfix-worker .metric {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 12px;
  padding: 20px;
  position: relative;
  flex: 1;
  flex-grow: 1;
  background-color: #ffffff;
  border-radius: 12px;
  overflow: hidden;
  border: 1px solid;
  border-color: #dfe3d9;
}

.pubfix-worker .div-3 {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
}

.pubfix-worker .label-3 {
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #69736b;
  font-size: 9px;
  letter-spacing: 0.05px;
  position: relative;
  line-height: normal;
}

.pubfix-worker .vector-10 {
  position: absolute;
  width: 94.61%;
  height: 86.27%;
  top: 13.73%;
  left: 5.39%;
}

.pubfix-worker .value {
  position: relative;
  width: fit-content;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #1e3329;
  font-size: 31px;
  letter-spacing: -0.31px;
  line-height: normal;
}

.pubfix-worker .vector-11 {
  position: absolute;
  width: 85.29%;
  height: 97.06%;
  top: 2.94%;
  left: 14.71%;
}

.pubfix-worker .vector-12 {
  position: absolute;
  width: 90.44%;
  height: 90.44%;
  top: 9.56%;
  left: 9.56%;
}

.pubfix-worker .vector-13 {
  position: absolute;
  width: 94.61%;
  height: 94.61%;
  top: 5.39%;
  left: 5.39%;
}

.pubfix-worker .requests-and {
  display: flex;
  align-items: flex-start;
  gap: 24px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
}

.pubfix-worker .job-inbox {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 20px;
  position: relative;
  flex: 1;
  flex-grow: 1;
}

.pubfix-worker .title {
  margin-top: -1px;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  font-size: 24px;
  letter-spacing: -0.17px;
  position: relative;
  width: fit-content;
  color: #1e3329;
  line-height: normal;
}

.pubfix-worker .inbox-sort {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  position: relative;
  flex: 0 0 auto;
}

.pubfix-worker .sort-value {
  position: relative;
  width: fit-content;
  margin-top: -0.5px;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #69736b;
  font-size: 11px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.pubfix-worker .chevron-down-2 {
  position: relative;
  width: 14px;
  height: 14px;
}

.pubfix-worker .vector-14 {
  position: absolute;
  width: 78.57%;
  height: 66.07%;
  top: 33.93%;
  left: 21.43%;
}

.pubfix-worker .request-tabs {
  display: flex;
  align-items: flex-start;
  gap: 24px;
  padding: 0px 0px 14px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
  border-bottom-width: 1px;
  border-bottom-style: solid;
  border-color: #dfe3d9;
}

.pubfix-worker .request-tab {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #25664d;
  font-size: 12px;
  letter-spacing: 0;
  line-height: normal;
  text-decoration: underline;
}

.pubfix-worker .request-tab-2 {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #69736b;
  font-size: 12px;
  letter-spacing: 0;
  line-height: normal;
}

.pubfix-worker .new-requests-heading {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  position: relative;
  flex: 0 0 auto;
}

.pubfix-worker .new-indicator {
  position: relative;
  width: 6px;
  height: 6px;
  background-color: #946421;
  border-radius: 6px;
}

.pubfix-worker .heading {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #1e3329;
  font-size: 12px;
  letter-spacing: 0;
  line-height: normal;
}

.pubfix-worker .incoming-job-request {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 17px;
  padding: 22px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
  background-color: #ffffff;
  border-radius: 12px;
  overflow: hidden;
  border: 1px solid;
  border-color: #dfe3d9;
}

.pubfix-worker .customer {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  position: relative;
  flex: 0 0 auto;
}

.pubfix-worker .initials-wrapper {
  display: flex;
  width: 35px;
  height: 35px;
  align-items: center;
  justify-content: center;
  position: relative;
  background-color: #ede9de;
  border-radius: 20px;
  overflow: hidden;
}

.pubfix-worker .initials {
  position: relative;
  width: fit-content;
  font-family: "Inter-SemiBold", Helvetica;
  font-weight: 600;
  color: #1e3329;
  font-size: 11px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.pubfix-worker .customer-identity {
  display: inline-flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 3px;
  position: relative;
  flex: 0 0 auto;
}

.pubfix-worker .status-2 {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  padding: 6px 10px;
  position: relative;
  flex: 0 0 auto;
  background-color: #fcf0de;
  border-radius: 100px;
  overflow: hidden;
}

.pubfix-worker .vector-wrapper-2 {
  position: relative;
  width: 13px;
  height: 13px;
}

.pubfix-worker .vector-15 {
  position: absolute;
  width: 95.52%;
  height: 95.52%;
  top: 4.48%;
  left: 4.48%;
}

.pubfix-worker .status-label-2 {
  color: #946421;
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-SemiBold", Helvetica;
  font-weight: 600;
  font-size: 11px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.pubfix-worker .job-details {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 11px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
}

.pubfix-worker .job-and-estimate {
  display: flex;
  align-items: baseline;
  justify-content: space-between;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
}

.pubfix-worker .job-title {
  position: relative;
  width: fit-content;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #1e3329;
  font-size: 21px;
  letter-spacing: -0.13px;
  line-height: normal;
  white-space: nowrap;
}

.pubfix-worker .estimate {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: transparent;
  font-size: 23px;
  letter-spacing: 0;
  line-height: normal;
}

.pubfix-worker .text-wrapper-4 {
  color: #1e3329;
}

.pubfix-worker .text-wrapper-5 {
  color: #69736b;
  font-size: 11px;
}

.pubfix-worker .date-and-place {
  display: inline-flex;
  align-items: center;
  gap: 18px;
  position: relative;
  flex: 0 0 auto;
}

.pubfix-worker .div-4 {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  position: relative;
  flex: 0 0 auto;
}

.pubfix-worker .vector-16 {
  position: absolute;
  width: 91.35%;
  height: 95.52%;
  top: 4.48%;
  left: 8.65%;
}

.pubfix-worker .text-wrapper-6 {
  margin-top: -1px;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #69736b;
  font-size: 11px;
  letter-spacing: 0;
  white-space: nowrap;
  position: relative;
  width: fit-content;
  line-height: normal;
}

.pubfix-worker .vector-17 {
  position: absolute;
  width: 87.18%;
  height: 95.52%;
  top: 4.48%;
  left: 12.82%;
}

.pubfix-worker .customer-note {
  position: relative;
  align-self: stretch;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #69736b;
  font-size: 13px;
  letter-spacing: 0;
  line-height: 20.8px;
}

.pubfix-worker .request-actions {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 15px 0px 0px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
  border-top-width: 1px;
  border-top-style: solid;
  border-color: #dfe3d9;
}

.pubfix-worker .text-wrapper-7 {
  position: relative;
  width: fit-content;
  font-family: "Inter-SemiBold", Helvetica;
  font-weight: 600;
  color: #25664d;
  font-size: 12px;
  letter-spacing: 0;
  line-height: normal;
}

.pubfix-worker .decision-actions {
  display: inline-flex;
  align-items: flex-start;
  gap: 10px;
  position: relative;
  flex: 0 0 auto;
}

.pubfix-worker .action {
  display: inline-flex;
  height: 50px;
  align-items: center;
  justify-content: center;
  gap: 10px;
  padding: 0px 22px;
  position: relative;
  flex: 0 0 auto;
  background-color: #ffffff;
  border-radius: 8px;
  overflow: hidden;
  border: 1px solid;
  border-color: #dfe3d9;
}

.pubfix-worker .label-4 {
  width: fit-content;
  font-family: "Inter-SemiBold", Helvetica;
  font-weight: 600;
  color: #1e3329;
  font-size: 14px;
  letter-spacing: 0;
  position: relative;
  line-height: normal;
}

.pubfix-worker .action-2 {
  display: inline-flex;
  height: 50px;
  align-items: center;
  justify-content: center;
  gap: 10px;
  padding: 0px 22px;
  position: relative;
  flex: 0 0 auto;
  background-color: #25664d;
  border-radius: 8px;
  overflow: hidden;
}

.pubfix-worker .label-5 {
  width: fit-content;
  font-family: "Inter-SemiBold", Helvetica;
  font-weight: 600;
  color: #ffffff;
  font-size: 14px;
  letter-spacing: 0;
  position: relative;
  line-height: normal;
}

.pubfix-worker .vector-18 {
  position: absolute;
  width: 86.27%;
  height: 77.94%;
  top: 22.06%;
  left: 13.73%;
}

.pubfix-worker .updated-requests {
  position: relative;
  width: fit-content;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #1e3329;
  font-size: 12px;
  letter-spacing: 0.07px;
  line-height: normal;
}

.pubfix-worker .accepted-and {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
  background-color: #ffffff;
  border-radius: 12px;
  overflow: hidden;
  border: 1px solid;
  border-color: #dfe3d9;
}

.pubfix-worker .updated-request {
  display: flex;
  align-items: center;
  gap: 18px;
  padding: 20px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
  border-bottom-width: 1px;
  border-bottom-style: solid;
  border-color: #dfe3d9;
}

.pubfix-worker .state-icon {
  display: flex;
  width: 34px;
  height: 34px;
  align-items: center;
  justify-content: center;
  position: relative;
  background-color: #eaf0e6;
  border-radius: 20px;
  overflow: hidden;
}

.pubfix-worker .job {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 5px;
  position: relative;
  flex: 1;
  flex-grow: 1;
}

.pubfix-worker .title-2 {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-SemiBold", Helvetica;
  font-weight: 600;
  color: #1e3329;
  font-size: 14px;
  letter-spacing: 0;
  line-height: normal;
}

.pubfix-worker .text-wrapper-8 {
  position: relative;
  width: fit-content;
  font-family: "Inter-SemiBold", Helvetica;
  font-weight: 600;
  color: #1e3329;
  font-size: 15px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.pubfix-worker .x-wrapper {
  display: flex;
  width: 34px;
  height: 34px;
  align-items: center;
  justify-content: center;
  position: relative;
  background-color: #f6e9e4;
  border-radius: 20px;
  overflow: hidden;
}

.pubfix-worker .vector-19 {
  position: absolute;
  width: 77.94%;
  height: 77.94%;
  top: 22.06%;
  left: 22.06%;
}

.pubfix-worker .decision-detail {
  color: #9d4d3e;
  position: relative;
  width: fit-content;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  font-size: 10px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.pubfix-worker .status-label-wrapper {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  padding: 6px 10px;
  position: relative;
  flex: 0 0 auto;
  background-color: #f6e9e4;
  border-radius: 100px;
  overflow: hidden;
}

.pubfix-worker .status-label-3 {
  color: #9d4d3e;
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-SemiBold", Helvetica;
  font-weight: 600;
  font-size: 11px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.pubfix-worker .your-working-day {
  display: flex;
  flex-direction: column;
  width: 280px;
  align-items: flex-start;
  gap: 20px;
  position: relative;
}

.pubfix-worker .todays-schedule {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 20px;
  padding: 22px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
  background-color: #ffffff;
  border-radius: 12px;
  overflow: hidden;
  border: 1px solid;
  border-color: #dfe3d9;
}

.pubfix-worker .p {
  margin-top: -1px;
  font-family: "Inter-SemiBold", Helvetica;
  font-weight: 600;
  font-size: 17px;
  letter-spacing: 0;
  position: relative;
  width: fit-content;
  color: #1e3329;
  line-height: normal;
}

.pubfix-worker .day {
  display: flex;
  flex-direction: column;
  width: 36px;
  align-items: center;
  gap: 10px;
  padding: 10px 0px;
  position: relative;
  background-color: #25664d;
  border-radius: 8px;
  overflow: hidden;
}

.pubfix-worker .weekday {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #c2d2c7;
  font-size: 10px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.pubfix-worker .date-2 {
  font-family: "Inter-SemiBold", Helvetica;
  font-weight: 600;
  color: #ffffff;
  font-size: 13px;
  letter-spacing: 0;
  position: relative;
  width: fit-content;
  line-height: normal;
}

.pubfix-worker .day-2 {
  display: flex;
  flex-direction: column;
  width: 36px;
  align-items: center;
  gap: 10px;
  padding: 10px 0px;
  position: relative;
  background-color: #f8f7f2;
  border-radius: 8px;
  overflow: hidden;
}

.pubfix-worker .text-wrapper-9 {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #69736b;
  font-size: 10px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.pubfix-worker .date-3 {
  position: relative;
  width: fit-content;
  font-family: "Inter-SemiBold", Helvetica;
  font-weight: 600;
  color: #1e3329;
  font-size: 13px;
  letter-spacing: 0;
  line-height: normal;
}

.pubfix-worker .confirmed {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 9px;
  padding: 0px 0px 0px 13px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
  border-left-width: 3px;
  border-left-style: solid;
  border-color: #25664d;
}

.pubfix-worker .time {
  position: relative;
  width: fit-content;
  margin-top: -3px;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #25664d;
  font-size: 11px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.pubfix-worker .job-title-2 {
  position: relative;
  align-self: stretch;
  font-family: "Inter-SemiBold", Helvetica;
  font-weight: 600;
  color: #1e3329;
  font-size: 14px;
  letter-spacing: 0;
  line-height: normal;
}

.pubfix-worker .customer-2 {
  position: relative;
  width: fit-content;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #69736b;
  font-size: 11px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.pubfix-worker .vector-20 {
  position: absolute;
  width: 87.18%;
  height: 78.85%;
  top: 21.15%;
  left: 12.82%;
}

.pubfix-worker .pending-appointment {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 9px;
  padding: 0px 0px 0px 13px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
  border-left-width: 3px;
  border-left-style: solid;
  border-color: #946421;
}

.pubfix-worker .time-2 {
  position: relative;
  width: fit-content;
  margin-top: -3px;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #946421;
  font-size: 11px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.pubfix-worker .your-service {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 16px;
  padding: 22px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
  background-color: #eaf0e6;
  border-radius: 12px;
  overflow: hidden;
}

.pubfix-worker .title-3 {
  margin-top: -1px;
  font-family: "Inter-SemiBold", Helvetica;
  font-weight: 600;
  font-size: 15px;
  letter-spacing: 0;
  white-space: nowrap;
  position: relative;
  width: fit-content;
  color: #1e3329;
  line-height: normal;
}

.pubfix-worker .current-settings {
  position: relative;
  align-self: stretch;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #69736b;
  font-size: 12px;
  letter-spacing: 0;
  line-height: 21.6px;
}

.pubfix-worker .a-helpful-reminder {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 13px;
  padding: 22px;
  position: relative;
  align-self: stretch;
  width: 100%;
  flex: 0 0 auto;
  border-radius: 12px;
  overflow: hidden;
  border: 1px solid;
  border-color: #dfe3d9;
}

.pubfix-worker .hand-heart-2 {
  position: relative;
  width: 25px;
  height: 25px;
}

.pubfix-worker .vector-21 {
  position: absolute;
  width: 93.67%;
  height: 89.50%;
  top: 10.50%;
  left: 6.33%;
}

.pubfix-worker .description {
  position: relative;
  align-self: stretch;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #69736b;
  font-size: 12px;
  letter-spacing: 0;
  line-height: 20.4px;
}

.pubfix-worker .note {
  position: relative;
  align-self: stretch;
  font-family: "Inter-Regular", Helvetica;
  font-weight: 400;
  color: #69736b;
  font-size: 11px;
  letter-spacing: 0;
  line-height: 17.6px;
}

.pubfix-worker .workspace-footer {
  align-items: flex-start;
  justify-content: space-between;
  padding: 4px 0px 0px;
  width: 100%;
  flex: 0 0 auto;
  display: flex;
  position: relative;
  align-self: stretch;
}
/* Inject after the existing style.css rules. Semantic elements retain the original visual treatment. */

button,
a {
  font: inherit;
}

button {
  cursor: pointer;
}

button:focus-visible,
a:focus-visible {
  outline: 2px solid #25664d;
  outline-offset: 2px;
}

.pubfix-worker button {
  appearance: none;
  border: 0;
}

.pubfix-worker a {
  color: inherit;
}

.pubfix-worker .notifications,
.pubfix-worker .chevron-down,
.pubfix-worker .inbox-sort,
.pubfix-worker .request-tab,
.pubfix-worker .request-tab-2,
.pubfix-worker .text-wrapper-7,
.pubfix-worker .availability-control {
  cursor: pointer;
}

.pubfix-worker .action,
.pubfix-worker .action-2,
.pubfix-worker .availability-control {
  font-family: inherit;
}

.pubfix-worker .request-tab,
.pubfix-worker .request-tab-2 {
  background: transparent;
  padding-left: 0;
  padding-right: 0;
}

.pubfix-worker .request-actions .text-wrapper-7,
.pubfix-worker .your-working-day .text-wrapper-7,
.pubfix-worker .your-service .text-wrapper-7 {
  background: transparent;
  padding: 0;
}

.pubfix-worker .workspace-footer a {
  display: inline-block;
}

@media (max-width: 1100px) {
  .pubfix-worker .dashboard-content {
    padding: 24px;
  }

  .pubfix-worker .requests-and {
    flex-direction: column;
  }

  .pubfix-worker .your-working-day {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .pubfix-worker .todays-schedule {
    grid-column: span 2;
  }
}

@media (max-width: 760px) {
  .pubfix-worker .workspace-navigation {
    height: auto;
    min-height: 72px;
    padding: 16px;
  }

  .pubfix-worker .brand-and-workspace {
    gap: 12px;
  }

  .pubfix-worker .account-tools {
    gap: 10px;
  }

  .pubfix-worker .signed-in,
  .pubfix-worker .account-tools .chevron-down {
    display: none;
  }

  .pubfix-worker .professional {
    display: block;
  }

  .pubfix-worker .workspace-sidebar {
    width: 100%;
    padding: 12px 16px;
    border-right: 0;
    border-bottom: 1px solid #dfe3d9;
  }

  .pubfix-worker .main-menu {
    flex-direction: row;
    overflow-x: auto;
  }

  .pubfix-worker .navigation-item,
  .pubfix-worker .navigation-item-2 {
    min-width: max-content;
    padding: 10px 12px;
  }

  .pubfix-worker .workspace-sidebar > .divider,
  .pubfix-worker .profile-menu {
    display: none;
  }

  .pubfix-worker .dashboard-content {
    padding: 20px 16px;
  }

  .pubfix-worker .div-2 {
    align-items: flex-start;
    gap: 16px;
    flex-wrap: wrap;
  }

  .pubfix-worker .greeting-title {
    font-size: 28px;
  }

  .pubfix-worker .performance-overview {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .pubfix-worker .date-and-place {
    align-items: flex-start;
    flex-direction: column;
    gap: 8px;
  }

  .pubfix-worker .job-and-estimate {
    gap: 12px;
    flex-wrap: wrap;
  }

  .pubfix-worker .job-title {
    white-space: normal;
  }

  .pubfix-worker .request-actions {
    align-items: flex-start;
    gap: 16px;
    flex-direction: column;
  }

  .pubfix-worker .decision-actions {
    width: 100%;
  }

  .pubfix-worker .decision-actions .action,
  .pubfix-worker .decision-actions .action-2 {
    flex: 1;
  }

  .pubfix-worker .your-working-day {
    display: flex;
  }

  .pubfix-worker .workspace-footer {
    gap: 12px;
    flex-direction: column;
  }
}

</style>
<body>
    <div class="pubfix-worker worker-page">
      @include('worker.partials.navigation')

        <!-- Header Navigation -->
        <header class="workspace-navigation">
            <div class="brand-and-workspace">
                <a class="goodhands" href="/" aria-label="PubFix home">
                    <span class="brand-mark" aria-hidden="true">
                        <span class="hand-heart">
                            <img class="vector" src="{{ asset('assets/img/vector-34.svg') }}" alt="">
                        </span>
                    </span>

                    <span class="brand-name">
                        <span class="text-wrapper">Pub</span><span class="span">Fix</span>
                    </span>
                </a>

                <span class="status" aria-label="Workspace type">
                    <span class="status-label">PRO WORKSPACE</span>
                </span>
            </div>

            <div class="account-tools">
                <button class="notifications" type="button" aria-label="Notifications, one unread">
                    <span class="bell">
                        <img src="{{ asset('assets/img/vector-6.svg') }}" alt="">
                    </span>
                    <span class="unread-dot" aria-hidden="true"></span>
                </button>

                <img src="{{ asset('assets/img/avatar.png') }}" alt="Marcus Reed">

                <div class="signed-in">
                    <div class="name">Marcus Reed</div>
                    <div class="div">Carpentry &amp; assembly</div>
                </div>

                <button class="chevron-down" type="button" aria-label="Open account menu">
                    <img class="vector-2" src="{{ asset('assets/img/vector-14.svg') }}" alt="">
                </button>
            </div>
        </header>

        <!-- Professional Workspace -->
        <div class="professional">

            <!-- Sidebar -->
            <aside class="workspace-sidebar" aria-label="Workspace navigation">
                <nav class="main-menu">

                    <a class="navigation-item" href="{{ route('worker.dashboard') }}" @class(['navigation-item-2' => request()->routeIs('worker.dashboard')])>
                        <span class="vector-wrapper">
                            <img class="vector-3" src="{{ asset('assets/img/vector-13.svg') }}" alt="">
                            <span class="text-wrapper-4">Overview</span>
                        </span>
                        <span class="label">Overview</span>
                    </a>

                    <a class="navigation-item" href="{{ route('worker.bookings') }}">
                        <span class="vector-wrapper">
                            <img class="vector-4" src="img/vector-31.svg" alt="">
                        </span>
                        <span class="label-2">Job requests</span>
                        <span class="text-wrapper-2">3</span>
                    </a>

                    <a class="navigation-item" href="{{ route('worker.schedule') }}">
                        <span class="vector-wrapper">
                            <img class="vector-5" src="img/vector.svg" alt="">
                        </span>
                        <span class="label">My schedule</span>
                    </a>

                    <a class="navigation-item" href="{{ route('worker.earnings') }}">
                        <span class="vector-wrapper">
                            <img class="vector-3" src="img/vector-24.svg" alt="">
                        </span>
                        <span class="label">Earnings</span>
                    </a>

                    <a class="navigation-item" href="{{ route('worker.profile') }}#reviews">
                        <span class="vector-wrapper">
                            <img class="vector-6" src="img/vector-15.svg" alt="">
                        </span>
                        <span class="label">Reviews</span>
                    </a>

                </nav>

                <div class="divider"></div>

                <nav class="profile-menu" aria-label="Profile navigation">

                    <a class="profile-navigation" href="{{ route('worker.profile') }}">
                        <span class="img-wrapper">
                            <img class="vector-7" src="img/vector-18.svg" alt="">
                        </span>
                        <span class="text-wrapper-3">My public profile</span>
                    </a>

                    <a class="profile-navigation" href="{{ route('worker.service-area') }}">
                        <span class="img-wrapper">
                            <img class="vector-8" src="img/vector-27.svg" alt="">
                        </span>
                        <span class="text-wrapper-3">Service area</span>
                    </a>

                    <a class="profile-navigation" href="{{ route('worker.settings') }}">
                        <span class="img-wrapper">
                            <img class="vector-9" src="img/vector-11.svg" alt="">
                        </span>
                        <span class="text-wrapper-3">Settings</span>
                    </a>

                </nav>
            </aside>

            <!-- Main Dashboard Content -->
            <main class="dashboard-content" id="overview">

                <!-- Greeting Section -->
                <section class="div-2" aria-labelledby="greeting-title">
                    <div class="greeting">
                        <div class="date">{{ now()->format('l, F j, Y') }}</div>

                        <h1 class="greeting-title" id="greeting-title">
                            Good morning, {{ $workspace['handyman']->user->name }}.
                        </h1>

                        <p class="summary">
                            Good work is coming your way. You have {{ $workspace['pendingRequests']->count() }} new job requests.
                        </p>
                    </div>

                    <button class="availability-control" type="button" aria-pressed="{{ $workspace['handyman']->available ? 'true' : 'false' }}" disabled>
                        <span class="online-indicator" aria-hidden="true"></span>
                        <span class="availability-label">{{ $workspace['handyman']->available ? 'Open to new jobs' : 'Currently unavailable' }}</span>
                        <span class="availability-toggle" aria-hidden="true">
                            <span class="toggle-handle"></span>
                        </span>
                    </button>
                </section>

                <!-- Performance Overview -->
                <section class="performance-overview" aria-label="Performance overview">

                    <article class="metric">
                        <div class="div-3">
                            <div class="label-3">NEW REQUESTS</div>
                            <span class="img-wrapper">
                                <img class="vector-10" src="img/vector-28.svg" alt="">
                            </span>
                        </div>
                        <div class="value">{{ $workspace['pendingRequests']->count() }}</div>
                        <div class="div">Ready for your reply</div>
                    </article>

                    <article class="metric">
                        <div class="div-3">
                            <div class="label-3">JOBS THIS WEEK</div>
                            <span class="img-wrapper">
                                <img class="vector-11" src="img/vector-2.svg" alt="">
                            </span>
                        </div>
                        <div class="value">{{ $workspace['weeklyJobCount'] }}</div>
                        <div class="div">{{ $workspace['upcomingBookings']->count() }} upcoming confirmed</div>
                    </article>

                    <article class="metric">
                        <div class="div-3">
                            <div class="label-3">EARNED THIS MONTH</div>
                            <span class="img-wrapper">
                                <img class="vector-12" src="img/vector-22.svg" alt="">
                            </span>
                        </div>
                        <div class="value">{{ $workspace['monthlyEarnings'] === null ? 'N/A' : '$'.number_format($workspace['monthlyEarnings'], 2) }}</div>
                        <div class="div">Payment data is not available yet</div>
                    </article>

                    <article class="metric">
                        <div class="div-3">
                            <div class="label-3">YOUR RATING</div>
                            <span class="img-wrapper">
                                <img class="vector-13" src="img/vector-20.svg" alt="">
                            </span>
                        </div>
                        <div class="value">{{ number_format($workspace['rating'], 1) }}</div>
                        <div class="div">From {{ $workspace['handyman']->reviews_count }} customer reviews</div>
                    </article>

                </section>

                <!-- Job Requests and Working Day -->
                <div class="requests-and">

                    <!-- Job Inbox -->
                    <section class="job-inbox" id="job-requests" aria-labelledby="job-requests-title">

                        <div class="div-2">
                            <h2 class="title" id="job-requests-title">Job requests</h2>

                            <button class="inbox-sort" type="button" aria-label="Sort job requests">
                                <span class="sort-value">Newest first</span>
                                <span class="chevron-down-2">
                                    <img class="vector-14" src="img/vector-17.svg" alt="">
                                </span>
                            </button>
                        </div>

                        <!-- Request Tabs -->
                        <div class="request-tabs" role="tablist" aria-label="Job request filters">
                            <button class="request-tab" type="button" role="tab" aria-selected="true">
                                All requests&nbsp;&nbsp;{{ $workspace['bookingCount'] }}
                            </button>

                            <button class="request-tab-2" type="button" role="tab" aria-selected="false">
                              New&nbsp;&nbsp;{{ $workspace['pendingRequests']->count() }}
                            </button>

                            <button class="request-tab-2" type="button" role="tab" aria-selected="false">
                                Accepted&nbsp;&nbsp;{{ $workspace['confirmedBookingCount'] }}
                            </button>

                            <button class="request-tab-2" type="button" role="tab" aria-selected="false">
                                Declined&nbsp;&nbsp;{{ $workspace['cancelledBookingCount'] }}
                            </button>
                        </div>

                        @if (isset($workspace))
                          <div class="new-requests-heading">
                            <span class="new-indicator"></span>
                            <h3 class="heading">NEEDS A REPLY · {{ $workspace['pendingRequests']->count() }}</h3>
                          </div>

                          @forelse ($workspace['pendingRequests'] as $booking)
                            <article class="incoming-job-request">
                              <div class="div-2">
                                <div class="customer">
                                  <div class="initials-wrapper"><span class="initials">{{ strtoupper(substr($booking->user->name, 0, 2)) }}</span></div>
                                  <div class="customer-identity">
                                    <div class="name">{{ $booking->user->name }}</div>
                                    <div class="div">Requested {{ $booking->created_at->diffForHumans() }}</div>
                                  </div>
                                </div>
                                <div class="status-2"><span class="status-label-2">Needs a reply</span></div>
                              </div>
                              <div class="job-details">
                                <div class="job-and-estimate"><h3 class="job-title">{{ $booking->description }}</h3></div>
                                <div class="date-and-place"><p class="text-wrapper-6">{{ $booking->booking_at->format('D, M j · g:i A') }}</p><div class="text-wrapper-6">{{ $booking->handyman->city }}</div></div>
                                <p class="customer-note">{{ $booking->description }}</p>
                              </div>
                              <div class="request-actions">
                                <a class="text-wrapper-7" href="{{ route('worker.bookings.show', $booking) }}">View job details ↗</a>
                                <div class="decision-actions">
                                  <form method="POST" action="{{ route('worker.bookings.decline', $booking) }}">@csrf<button class="action" type="submit"><span class="label-4">Decline</span></button></form>
                                  <form method="POST" action="{{ route('worker.bookings.accept', $booking) }}">@csrf<button class="action-2" type="submit"><span class="label-5">Accept job</span></button></form>
                                </div>
                              </div>
                            </article>
                          @empty
                            <div class="incoming-job-request"><p class="customer-note">No new job requests.</p></div>
                          @endforelse
                        @else
                        <div class="new-requests-heading">
                            <span class="new-indicator"></span>
                            <h3 class="heading">NEEDS A REPLY · 3</h3>
                        </div>

                        <!-- Request 1 -->
                        <article class="incoming-job-request">
                            <div class="div-2">
                                <div class="customer">
                                    <div class="initials-wrapper">
                                        <span class="initials">ER</span>
                                    </div>

                                    <div class="customer-identity">
                                        <div class="name">Emily Rivera</div>
                                        <div class="div">Requested 18 min ago</div>
                                    </div>
                                </div>

                                <div class="status-2">
                                    <span class="vector-wrapper-2">
                                        <img class="vector-15" src="img/vector-30.svg" alt="">
                                    </span>
                                    <span class="status-label-2">Needs a reply</span>
                                </div>
                            </div>

                            <div class="job-details">
                                <div class="job-and-estimate">
                                    <h3 class="job-title">Assemble a desk &amp; bookshelf</h3>
                                    <p class="estimate">
                                        <span class="text-wrapper-4">$110</span>
                                        <span class="text-wrapper-5"> est.</span>
                                    </p>
                                </div>

                                <div class="date-and-place">
                                    <div class="div-4">
                                        <span class="vector-wrapper-2">
                                            <img class="vector-16" src="img/vector-16.svg" alt="">
                                        </span>
                                        <p class="text-wrapper-6">Today, Oct 16 · 2:00 PM</p>
                                    </div>

                                    <div class="div-4">
                                        <span class="vector-wrapper-2">
                                            <img class="vector-17" src="img/vector-29.svg" alt="">
                                        </span>
                                        <p class="text-wrapper-6">Bouldin Creek · 2 mi</p>
                                    </div>

                                    <div class="text-wrapper-6">2 hours × $55/hr</div>
                                </div>

                                <p class="customer-note">
                                    Two IKEA pieces for my home office. Boxes are ready in the room,
                                    with instructions. I’d love a hand getting everything set up.
                                </p>
                            </div>

                            <div class="request-actions">
                                <button class="text-wrapper-7" type="button">
                                    View job details ↗
                                </button>

                                <div class="decision-actions">
                                    <button class="action" type="button">
                                        <span class="label-4">Decline</span>
                                    </button>

                                    <button class="action-2" type="button">
                                        <span class="label-5">Accept job</span>
                                        <span class="img-wrapper">
                                            <img class="vector-18" src="img/vector-5.svg" alt="">
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </article>

                        <!-- Request 2 -->
                        <article class="incoming-job-request">
                            <div class="div-2">
                                <div class="customer">
                                    <div class="initials-wrapper">
                                        <span class="initials">JT</span>
                                    </div>

                                    <div class="customer-identity">
                                        <div class="name">James Thompson</div>
                                        <div class="div">Requested 1 hour ago</div>
                                    </div>
                                </div>

                                <div class="status-2">
                                    <span class="vector-wrapper-2">
                                        <img class="vector-15" src="img/vector-33.svg" alt="">
                                    </span>
                                    <span class="status-label-2">Needs a reply</span>
                                </div>
                            </div>

                            <div class="job-details">
                                <div class="job-and-estimate">
                                    <h3 class="job-title">Install three floating shelves</h3>
                                    <p class="estimate">
                                        <span class="text-wrapper-4">$110</span>
                                        <span class="text-wrapper-5"> est.</span>
                                    </p>
                                </div>

                                <div class="date-and-place">
                                    <div class="div-4">
                                        <span class="vector-wrapper-2">
                                            <img class="vector-16" src="img/vector-26.svg" alt="">
                                        </span>
                                        <p class="text-wrapper-6">Sat, Oct 17 · 10:00 AM</p>
                                    </div>

                                    <div class="div-4">
                                        <span class="vector-wrapper-2">
                                            <img class="vector-17" src="img/vector-25.svg" alt="">
                                        </span>
                                        <div class="text-wrapper-6">Zilker · 3 mi</div>
                                    </div>

                                    <div class="text-wrapper-6">2 hours × $55/hr</div>
                                </div>

                                <p class="customer-note">
                                    Three oak shelves to mount in the living room. Brackets are included.
                                    Please bring a stud finder and suitable wall fixings.
                                </p>
                            </div>

                            <div class="request-actions">
                                <button class="text-wrapper-7" type="button">
                                    View job details ↗
                                </button>

                                <div class="decision-actions">
                                    <button class="action" type="button">
                                        <span class="label-4">Decline</span>
                                    </button>

                                    <button class="action-2" type="button">
                                        <span class="label-5">Accept job</span>
                                        <span class="img-wrapper">
                                            <img class="vector-18" src="img/vector-3.svg" alt="">
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </article>

                        <!-- Request 3 -->
                        <article class="incoming-job-request">
                            <div class="div-2">
                                <div class="customer">
                                    <div class="initials-wrapper">
                                        <span class="initials">PS</span>
                                    </div>

                                    <div class="customer-identity">
                                        <div class="name">Priya Shah</div>
                                        <div class="div">Requested 2 hours ago</div>
                                    </div>
                                </div>

                                <div class="status-2">
                                    <span class="vector-wrapper-2">
                                        <img class="vector-15" src="img/vector-7.svg" alt="">
                                    </span>
                                    <span class="status-label-2">Needs a reply</span>
                                </div>
                            </div>

                            <div class="job-details">
                                <div class="job-and-estimate">
                                    <h3 class="job-title">Build a two-door wardrobe</h3>
                                    <p class="estimate">
                                        <span class="text-wrapper-4">$165</span>
                                        <span class="text-wrapper-5"> est.</span>
                                    </p>
                                </div>

                                <div class="date-and-place">
                                    <div class="div-4">
                                        <span class="vector-wrapper-2">
                                            <img class="vector-16" src="img/vector-8.svg" alt="">
                                        </span>
                                        <p class="text-wrapper-6">Sun, Oct 18 · 11:00 AM</p>
                                    </div>

                                    <div class="div-4">
                                        <span class="vector-wrapper-2">
                                            <img class="vector-17" src="img/vector-32.svg" alt="">
                                        </span>
                                        <p class="text-wrapper-6">South Lamar · 1.5 mi</p>
                                    </div>

                                    <div class="text-wrapper-6">3 hours × $55/hr</div>
                                </div>

                                <p class="customer-note">
                                    A new flat-pack wardrobe for our guest room. There’s plenty of space
                                    to work, and I can help with lifting if needed.
                                </p>
                            </div>

                            <div class="request-actions">
                                <button class="text-wrapper-7" type="button">
                                    View job details ↗
                                </button>

                                <div class="decision-actions">
                                    <button class="action" type="button">
                                        <span class="label-4">Decline</span>
                                    </button>

                                    <button class="action-2" type="button">
                                        <span class="label-5">Accept job</span>
                                        <span class="img-wrapper">
                                            <img class="vector-18" src="img/vector-4.svg" alt="">
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </article>

                        <!-- Recently Updated Requests -->
                        <h3 class="updated-requests">RECENTLY UPDATED</h3>

                        <section class="accepted-and" aria-label="Recently updated requests">

                            <article class="updated-request">
                                <div class="state-icon">
                                    <span class="img-wrapper">
                                        <img class="vector-18" src="img/image.svg" alt="">
                                    </span>
                                </div>

                                <div class="job">
                                    <h4 class="title-2">Assemble a standing desk</h4>
                                    <p class="div">Ethan Wilson · Today, 10:00 AM</p>
                                    <div class="text-wrapper-2">
                                        Confirmed · Message customer
                                    </div>
                                </div>

                                <div class="text-wrapper-8">$110</div>

                                <div class="status">
                                    <span class="status-label">Accepted</span>
                                </div>
                            </article>

                            <article class="updated-request">
                                <div class="state-icon">
                                    <span class="img-wrapper">
                                        <img class="vector-18" src="img/vector-21.svg" alt="">
                                    </span>
                                </div>

                                <div class="job">
                                    <h4 class="title-2">Mount living room shelves</h4>
                                    <p class="div">Ava Patel · Sat, Oct 17, 2:00 PM</p>
                                    <div class="text-wrapper-2">
                                        Confirmed · Message customer
                                    </div>
                                </div>

                                <div class="text-wrapper-8">$110</div>

                                <div class="status">
                                    <span class="status-label">Accepted</span>
                                </div>
                            </article>

                            <article class="updated-request">
                                <div class="x-wrapper">
                                    <span class="img-wrapper">
                                        <img class="vector-19" src="img/vector-12.svg" alt="">
                                    </span>
                                </div>

                                <div class="job">
                                    <h4 class="title-2">Mount a bedroom TV</h4>
                                    <p class="div">Noah Davis · Sun, Oct 18, 9:00 AM</p>
                                    <p class="decision-detail">
                                        Schedule conflict · Customer notified
                                    </p>
                                </div>

                                <div class="text-wrapper-8">$55</div>

                                <div class="status-label-wrapper">
                                    <span class="status-label-3">Declined</span>
                                </div>
                            </article>

                        </section>
                        @endif
                      </section>

                    <!-- Working Day Sidebar -->
                    <aside class="your-working-day" id="schedule" aria-label="Your working day">

                        <!-- Today's Schedule -->
                        <section class="todays-schedule">
                          @if (isset($workspace))
                            <div class="div-2">
                              <h2 class="p">Your upcoming work</h2>
                            </div>
                            @forelse ($workspace['upcomingBookings']->take(3) as $booking)
                              <article class="confirmed">
                                <p class="time">{{ $booking->booking_at->format('M j · g:i A') }}</p>
                                <h3 class="job-title-2">{{ $booking->description }}</h3>
                                <p class="customer-2">{{ $booking->user->name }} · {{ $booking->handyman->city }}</p>
                                <div class="status"><span class="status-label">{{ ucfirst($booking->status->value) }}</span></div>
                              </article>
                            @empty
                              <p class="customer-note">No upcoming confirmed tasks.</p>
                            @endforelse
                            <a class="text-wrapper-7" href="{{ route('worker.schedule') }}">View full schedule ↗</a>
                          @else
                            <div class="div-2">
                                <h2 class="p">Your day, at a glance</h2>
                                <span class="vector-wrapper">
                                    <img class="vector-5" src="img/vector-10.svg" alt="">
                                </span>
                            </div>

                            <div class="text-wrapper-3">Friday, October 16</div>

                            <div class="div-3">
                                <div class="day">
                                    <div class="weekday">F</div>
                                    <div class="date-2">16</div>
                                </div>

                                <div class="day-2">
                                    <div class="text-wrapper-9">S</div>
                                    <div class="date-3">17</div>
                                </div>

                                <div class="day-2">
                                    <div class="text-wrapper-9">S</div>
                                    <div class="date-3">18</div>
                                </div>

                                <div class="day-2">
                                    <div class="text-wrapper-9">M</div>
                                    <div class="date-3">19</div>
                                </div>

                                <div class="day-2">
                                    <div class="text-wrapper-9">T</div>
                                    <div class="date-3">20</div>
                                </div>
                            </div>

                            <div class="divider"></div>

                            <article class="confirmed">
                                <p class="time">10:00 AM – 12:00 PM</p>
                                <h3 class="job-title-2">Standing desk assembly</h3>
                                <p class="customer-2">Ethan Wilson · Travis Heights</p>

                                <div class="status">
                                    <span class="vector-wrapper-2">
                                        <img class="vector-20" src="img/vector-9.svg" alt="">
                                    </span>
                                    <span class="status-label">Confirmed</span>
                                </div>
                            </article>

                            <article class="pending-appointment">
                                <p class="time-2">2:00 PM – 4:00 PM</p>
                                <h3 class="job-title-2">Desk &amp; bookshelf assembly</h3>
                                <p class="customer-2">Emily Rivera · Bouldin Creek</p>

                                <div class="status-2">
                                    <span class="status-label-2">Awaiting your reply</span>
                                </div>
                            </article>

                            <button class="text-wrapper-7" type="button">
                                View full schedule ↗
                            </button>
                            @endif
                        </section>

                          @if (isset($workspace))
                            <section class="your-service" aria-labelledby="recent-updates-title">
                              <div class="div-3"><h2 class="title-3" id="recent-updates-title">Recent updates</h2></div>
                              @forelse ($workspace['recentBookings'] as $booking)
                                <a class="current-settings" href="{{ route('worker.bookings.show', $booking) }}">{{ $booking->description }}<br>{{ $booking->user->name }} · {{ ucfirst($booking->status->value) }}</a>
                              @empty
                                <p class="current-settings">No recent booking updates.</p>
                              @endforelse
                            </section>
                          @endif

                        <!-- Service Preferences -->
                        <section class="your-service">
                            <div class="div-3">
                                <h2 class="title-3">Your work, your way</h2>
                                <span class="vector-wrapper">
                                    <img class="vector-3" src="img/vector-23.svg" alt="">
                                </span>
                            </div>

                            <p class="current-settings">
                                Carpentry &amp; assembly<br>
                                $55 / hour · 1-hour minimum<br>
                                Within 10 miles of 78704
                            </p>

                            <button class="text-wrapper-7" type="button">
                                Edit service preferences ↗
                            </button>
                        </section>

                        <!-- Helpful Reminder -->
                        <aside class="a-helpful-reminder">
                            <span class="hand-heart-2">
                                <img class="vector-21" src="img/vector-19.svg" alt="">
                            </span>

                            <h2 class="text-wrapper-8">
                                A quick reply goes a long way.
                            </h2>

                            <p class="description">
                                Try to respond within 24 hours. Can’t take a job?
                                Declining lets your neighbor find another helping hand.
                            </p>

                            <p class="note">
                                Estimates cover labor only. Agree on materials and final scope
                                before starting.
                            </p>
                        </aside>

                    </aside>
                </div>
            </main>
    </div>

    <footer class="workspace-footer">
        <p class="text-wrapper-9">
            © 2026 PubFix · Built around good work.
        </p>

        <nav aria-label="Footer navigation">
            <a class="text-wrapper-9" href="#help">Help center</a>
            <a class="text-wrapper-9" href="#terms">Terms</a>
            <a class="text-wrapper-9" href="#privacy">Privacy</a>
        </nav>
    </footer>

</div>
</body>
</html>


```