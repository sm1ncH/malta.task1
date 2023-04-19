<?php
require_once 'baza.php';
require_once 'cookie.php';
$id = $_COOKIE['id'];
$name = $_COOKIE['name'];
$surname = $_COOKIE['surname'];
$card_number = $_COOKIE['card_number'];
$company = $_COOKIE['company'];
$address1 = $_COOKIE['address1'];
$address2 = $_COOKIE['address2'];
$town = $_COOKIE['town'];
$post = $_COOKIE['post'];
$service = $_POST['service'];
$commencement = $_POST['commencement'];
$fee = $_POST['fee'];
$vatfee = $_POST['vatfee'];
$paymentterm = $_POST['paymentterm'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style/form1.css">
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
    window.jsPDF = window.jspdf.jsPDF;
var docPDF = new jsPDF();
function print(){
var elementHTML = document.querySelector("#printTable");
docPDF.html(elementHTML, {
 callback: function(docPDF) {
  docPDF.save('HTML Linuxhint web page.pdf');
 },
 x: 15,
 y: 15,
 width: 170,
 windowWidth: 650
});
}
    </script>
</head>
<body>
<form id="printTable" action="final_form.php" method="POST">
        <h1>Terms and Conditions of Service – Agreement <br><h1>
        
        <h3>REFERENCE NUMBER: ERDF.03.S1.Call 2.0231</h3>
        <kbd>This agreement is being entered into on the <span class="admin">/11/2021 between on the first part Yves De Barro, 
        ID Card Number 0138686M hereinafter referred to as "DB", <?php echo $name." ".$surname; ?> ID Card Number <?php echo $card_number; ?> and 
        <?php echo $company; ?> hereinafter referred to as the "CLIENT".</kbd>
        <p>Whereas
            (a) It is the intention of DB that all terms of the agreement between the CLIENT and DB are contained in this agreement and its conditions of service schedule. Therefore this agreement and its conditions of service schedule constitute the entire agreement between the parties and replace all previous agreements in respect of the services to be rendered. This agreement may not be varied unless variations are in writing by an authorised representative of DB.
            (b) DB is the provider of the service to be rendered, as specified in the conditions of service schedule
            (c) The CLIENT wishes to engage the services of the DB for the provision of such services.
            (d) The Parties are desirous of regulating their relationship.
            
            DEFINITIONS
            Confidential Information is defined as any information which relates to the administrative, financial, technical or operational arrangements of any party, or of any holding company of any party or subsidiary of such holding company, and any information of a secret nature or which is otherwise expressly stated by the party disclosing such information to be confidential. Including but not limited to trade secrets, know-how, intellectual property, designs, software technology and inventions created by either party or otherwise licensed to one of the parties, or on respect of which the party has a right of use.
            
            Received Data is defined as any relevant information, material, documents or data received by DB from the CLIENT in any format, to be used in connection with the service to be rendered under this agreement
            Produced Material is defined as any relevant information, material, documents or data produced by DB for the CLIENT as part of the service to be rendered under this agreement.
            
            1. THE SERVICE
            The service, for which DB is being engaged, as specified in the conditions of service schedule, will be completed by DB with reasonable skill, care and diligence in accordance with this agreement. DB shall provide the CLIENT with updates and/or reports of the work at such intervals and in such form as agreed to between DB and the CLIENT as specified in the conditions of service schedule.
            
            2. COMMENCEMENT AND DURATION
            This agreement shall come into effect on the commencement date specified in the conditions of service schedule and shall continue, unless terminated under clause 12, in full force and effect until the termination date specified in the conditions of service schedule, if applicable, or otherwise until completion of the service.
            3. SERVICE FEE AND EXPENSES
            i.	The CLIENT shall pay to DB a service fee at the rate specified in the conditions of service schedule, which shall be invoiced by DB and such invoices to be payable by the CLIENT within thirty [30] days from the date of invoice. Fees in conditions of service schedule are exclusive of Value Added Tax (VAT), which will be charged, where applicable, in addition and at the appropriate rate.
            <br><br><br><br>
            ii.	The agreed service fee may be increased if and to the extent that DB’s costs are increased by increases in the cost of labour or cost of living adjustment or an increase in the cost of fuel or by changes in law which have effect after the date of this agreement. This will be done by DB giving the CLIENT one month’s prior notice. If the agreement being entered into is for a period equal to or longer than 12 months, or project-based but on an indefinite period that may elapse the 12 months then the contract price may be increased yearly, either on each anniversary of the date of this Agreement, or at any time after the lapse of the 12 months, by a percentage which at least reflects the standard national inflation costs, as agreed to by the CLIENT and DB.
            
            iii.	The fees agreed to as at the date of signing this agreement, specified in the conditions of service schedule, are based on information made available to DB by the CLIENT therefore DB reserves the right to revise the stipulated fee in the light of additional information that may alter the objectives, location or complexity of the service.
            
            In the case of a fixed fee project, DB reserves the right to require a payment of fifty percent (50%) of the total fee in advance, prior to commencing work
            
            v.	DB, without prejudice to any other rights and remedies, may charge interest at the rate of 8% per annum (both before and after judgment) on fees which are not paid by the date on which they become due. Furthermore, the provision of the service may be suspended until payment in full is settled.
            
            vi.	DB shall be entitled to be reimbursed by the CLIENT for expenses reasonably and properly incurred by DB in the performance of duties required to render the service, subject to production of such evidence thereof as the CLIENT may reasonably require.
            4. ACCESS AND RECEIVED DATA
            The CLIENT shall grant DB all reasonable access to locations, premises, staff and resources as necessary for the performance of the service. Furthermore, the CLIENT shall at its own expense supply DB with all Received Data as is necessary, and within sufficient time to enable DB to perform the services. The CLIENT shall ensure the accuracy of any Received Data and undertakes that DB is entitled to use the Received Data for the purpose of this agreement.
            
            5. PRODUCED MATERIAL
            In any documentation and material in any format produced by DB and provided to the CLIENT as part of the service (Produced Material), DB shall utilize the best of the knowledge, information, ability and experience of the consultants employed by DB and it shall contain such advice as shall appear to such consultants to be reasonably, legally and commercially practicable.
            
            6. CONFIDENTIALITY
            During the course of business, certain Confidential Information, both oral and written, may be exchanged between the Consultant and the CLIENT, and the following will apply:
            
            i.	In consideration of each party supplying the other with confidential information, each party agrees that it will treat all such information which is disclosed to it by the other party, as confidential and will not, except as hereinafter provided, disclose, use or permit the disclosure of use of such information for a period of five years from the date of disclosure
            
            ii.	Confidential Information disclosed by either party shall not be used by the other party other than to fulfill the purpose of this agreement
            
            iii.	Either party may disclose Confidential Information disclosed to it by the other party, but then only to the extent described in the above clause, to such of its employees and advisors whose participation is essential and who are informed of the confidential nature of such information and who agree to be bound by the terms of this Agreement as if a party hereto.
            
            iv.	It is hereby agreed by and between the parties that any information which is or becomes a part of the public domain through no act or omission of either party, or was in the possession of the divulging party prior to the commencement of this agreement and had not been obtained either directly or indirectly from the other party, or is lawfully disclosed to the divulging party without restriction on disclosure, shall not be deemed to be confidential or reserved information.
            
            v.	Should either party be obliged to disclose any such Confidential Information to any Court or other competent adjudicating authority by law, the said disclosure shall not be deemed to be a breach of the obligation assumed in virtue of this agreement.
            
            vi	Neither party shall make any copies of any Confidential Information furnished to it by the other party without the prior consent of the other party.
            
            vii.	Either party may, at any time, request the return of Received Data or Produced Material from the other party's possession including any copies thereof (including, without limitation, written or printed copies or copies recorded on any electronic media) containing any Confidential Information of the requesting party and the other party shall immediately comply with such request.
            
            viii.	Each party undertakes to the other party to use its best endeavors to ensure the accuracy and completeness of all Confidential Information disclosed by it to the other party but the disclosing party shall have no liability to the other party resulting from the use of any Confidential Information supplied by the disclosing party.
            
            ix.	No license or rights are granted hereby to a receiving party in any Confidential Information disclosed by a disclosing party pursuant hereto.
            
            x.	No failure or delay in exercising any right under this Agreement shall operate as a waiver thereof nor shall any single or partial exercise thereof preclude any other or further exercise of any right hereunder.
            <br><br><br><br><br>
            7. PUBLICATION OF MATERIAL
            Where the services provided under this agreement include the publication of material, the following conditions shall apply:
            
            The CLIENT will retain the right to edit the final draft prior to publication subject, in the case of joint publications, to amendments proposed being agreed with the author(s)
            
            Prior to publication, DB shall not disclose any material obtained or produced for the purpose of the project to any other party unless the CLIENT has given prior approval.
            
            8. INTELLECTUAL PROPERTY RIGHTS
            i.	Any and all patent or other intellectual property rights flowing from either party's consideration of Confidential Information disclosed to it by the other party shall belong to the disclosing party.
            
            ii.	Whereas the intellectual property rights in the Produced Material will vest in the CLIENT, the copyright and all other intellectual and proprietary rights whatsoever in any tools, techniques and methodologies provided or produced by DB and/or its employees or agents in connection with performance of the service (including but not limited to DB's sourcing methodology and any other documentation referring to proprietary methods or approaches) shall be owned by and remain vested in DB.
            
            iii.	The CLIENT undertakes to use the Produced Material solely for the purposes for which such documentation and/or material are provided to the CLIENT.
            
            iv.	Where the purposes for which the Produced Material is provided to the CLIENT permit the CLIENT to disclose or copy such documentation or material to any third party, the CLIENT shall ensure that prior to such copying or disclosure, the third party acknowledges and agrees in writing that the copyright and all other intellectual property and proprietary rights in any tools, techniques and methodologies are owned by DB and that the third party will keep such Produced Material confidential.
            9. RESTRICTIONS
            i.	Each party undertakes to the other that, for the duration of this agreement and for a period of five years after the cessation of such agreement, it shall not solicit or entice away from the other party any officer, manager or servant whether or not such person would commit a breach of his contract of employment by reason of leaving service, provided that this undertaking shall not restrict either party from carrying out general recruitment activities in the normal course of business.
            
            10. LIMITATION OF DB’S LIABILITY
            DB shall not be liable in any way whatsoever, and the CLIENT expressly waives any right (whether under contract, tort or statutory) for any punitive damages, business interruption, loss of profits, business contracts, revenues or anticipated savings, or other indirect or consequential damages suffered by the CLIENT howsoever arising.
            
            11. FORCE MAJEURE
            DB shall not in any circumstance whatsoever be liable for any failure or delay in carrying out the service, where such failure or delay is caused by circumstances beyond DB’s control which It could not reasonably be expected to have foreseen at the time the agreement was made and whose effect it could not reasonably have avoided or overcome
            
            12. TERMINATION OF SERVICE
            Upon termination of this agreement, DB will return to the CLIENT any produced material and any documents, material or information supplied by or obtained from the CLIENT in connection with the service provided under this agreement.
            
            13. GOVERNANCE
            This Agreement shall be governed by and construed in accordance with the laws of [Malta] and the parties irrevocably agree to submit themselves to the exclusive jurisdiction of the [Maltese] Courts.
            </p>
            <h3>YVES DE BARRO <br>
                ID Card: 0138686m
                </h3>
            <h3><?php echo $name." ".$surname; ?> 
                </h3>

            <!-- to je insert glavni del -->
            <div>
                <table>
                    <tr>
                        <td><p>The Service</p> <!--Tu bo ona php koda--></td>
                        <td><?php echo $service; ?></td>
                    </tr>
                    <tr>
                        <td><p>VAT Number</p> <!--Tu bo ona php koda--></td>
                        <td><?php echo $card_number; ?></td>
                    </tr>
                    <tr>
                        <td><p>BILLING address</p> </td>
                        <td><?php echo $address1; ?><br><?php echo $address2; ?><br><?php echo $town; ?><br><?php echo $post; ?></td>
                    </tr>
                    <tr>
                        <td><p>commencement Date </p></td>
                        <td><?php echo $commencement; ?></td>
                    </tr>
                    <tr>
                        <td><p>Termination date</p></td>
                        <td><p>Six to twelve months from date of commencement</p></td>
                    </tr>
                    <tr>
                        <td><p>Possible expences</p></td>
                        <td><p>N/A</p></td>
                    </tr>
                    <tr>
                        <td><p>Service FEE  </p></td>
                        <td><span>€<?php echo $fee; ?> excl VAT. [€<?php echo $vatfee; ?> inclusive of VAT] This is based on estimation of works as per annexed Proposal Document </td>
                    </tr>
                    <tr>
                        <td><p>Payment terms</p></td>
                        <td><span>100% on completion [€<?php echo $paymentterm; ?>  inclusive of VAT]</td>
                    </tr>
                </table>
            </div>
    </form> 
    <button id="printButton" onclick="print()">Download PDF</button>
</body>
</html>