<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Blog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <style type="text/css">
 
    .main-title-white {
      font-size: 5rem;
    }
    a > .bg-white > .p-4 > .para-text {
        font-size: 1.5rem;
        color: #595959;
        font-weight: 400;
        line-height: 1.5;
        font-family: "Roboto", sans-serif !important;
    }
     a > .bg-white > .p-4 >  .small-title-dark {
        font-size: 2rem;
        font-weight: 500;
        color: #011F3D;
    }
    td,th {
      border:1px solid black;
      padding:10px;
    }
  </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="info-header">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>

<?php include 'header.php';?>
<!-- partial -->

<!-- Section 1-->

  <section class="container uk-section">
    <div class="row py-6">
        <div class="text-center">
          <div class="main-title-white blue">FIX Engine – Demystifying FIX Message  </div>
        </div>

        <div class="w-100">
          <img class="w-100" src="assets/img/blog_8.jpg ">
        </div>
        <div class="d-flex items-center mt-2 p-4">
            <img src="assets/img/profile.jpg" alt="Author Avatar" class="h-8 w-8 rounded-full">
            <div class="para-text ml-2" style="font-size: 1.5rem!important;">By Author Name <br> 13th Mar 2023</div>
        </div>

        <div class="para-text mt-5">

          <strong class="blue"> Understanding the FIX Engine </strong><br><br>

          The Financial Information Exchange (FIX) protocol emerged in the 1990s as a standardized means for financial firms to communicate. Unlike proprietary solutions, FIX offers a global standard, promoting interoperability.  <br>
          The FIX protocol is a text-based, transport-agnostic protocol extensively employed by financial institutions for order transmission, execution report receipt, and market data dissemination. With various versions available, institutions typically tailor a specific FIX version to suit their unique requirements and use cases. Most of the communication between exchanges, brokers, banks and other financial institutions takes place using FIX.

        </div>

        <div class="para-text mt-5">
          Though FIX Protocol Ltd/FIX Trading Community supervised the protocol's development, they did not produce or market FIX engines; instead, they provided the blueprint for others to create them. 
        </div>

        <div class="para-text mt-5">
          A FIX engine serves as middleware between your enterprise and that of your business partners, facilitating message exchange. It manages network connections, sends and receives FIX messages, and validates their adherence to the FIX format. Numerous FIX engine providers, both commercial and open-source, offer various functionalities. QuantXpress stands out in this domain with its QX.FIX Engine, enabling businesses to harness FIX's power for streamlined communication and a competitive edge in the financial market.
        </div>

        <div class="para-text mt-5">
          <strong class="blue"> Origins of the FIX Engine </strong><br>
          
          Initially, the sole option for utilizing a FIX engine involved developing a custom solution (commercial versions followed suit). Dubbed a "FIX Engine," this software component facilitated connection and communication using the FIX protocol. However, due to variations in interpretation and implementation of the protocol, disagreements arose, particularly during testing phases regarding message resending and correction responses.
 
        </div>

        <div class="para-text mt-5">
          <strong class="blue"> Deconstructing the FIX Protocol Engine  </strong><br>
          
          The FIX engine facilitates low-level communication and FIX message encoding/decoding (parsing). Typically leveraging the TCP/IP protocol, FIX engines establish connections by either initiating or accepting them. Traditionally, investment managers (buy-side) act as initiators, while broker/dealers (sell-side) serve as acceptors. A critical function of the FIX engine involves managing network connection, sending, receiving, validating and replaying messages, ensuring sequential and ordered message processing, Persist FIX session state. Additionally, the engine must incorporate logic to handle missing messages for seamless recovery.
        </div>

        <div class="para-text mt-5">
          <strong class="blue"> FIX Message </strong><br> 
          At the heart of this communication lies the FIX message, a structured format that carries vital information between trading platforms and participants. Let's delve into the anatomy, construction, and significance of these FIX messages. 
        </div>

        <div class="para-text mt-5">
          <strong class="blue"> Anatomy of a FIX Message </strong><br> 
          FIX messages follow a key-value pair format, containing information for a transaction state. Tags correspond to fields in the FIX specification. Each message comprises a header, body, and trailer 
        </div>


        <div class="para-text mt-5"> 

          <ul style="list-style-type: circle;" class="ps-5">
            <li> 
              <strong class="blue"> Header : </strong>
              Acting as the introduction, the header contains vital details such as the version of the FIX protocol being employed (e.g., FIX.4.2), the total length of the message (excluding the header and trailer), and the message type (e.g., order, execution report). The important tags in FIX message header sections are: <br><br>

              Here are some important tags commonly found in the header section:


              <table style="width:100%"> 
                <tr>
                  <td>Tag 8 (BeginString): </td>
                  <td>This tag denotes the version of the FIX protocol being employed. For example, "8=FIX.4.2" indicates the utilization of FIX version 4.2.</td> 
                </tr> 
                
                <tr>
                  <td>Tag 9 (BodyLength):  </td>
                  <td>The BodyLength tag specifies the total length of the message, excluding the header and trailer sections. It ensures accurate message parsing and processing.</td> 
                </tr> 

                <tr>
                  <td>Tag 35 (MsgType):   </td>
                  <td>The MsgType tag delineates the type of message being transmitted, such as order, execution report, or cancel request. It plays a pivotal role in message routing and interpretation.</td> 
                </tr> 

                <tr>
                  <td>Tag 49 (SenderCompID):   </td>
                  <td>This tag identifies the sender of the message, typically denoting the unique identifier or code assigned to the sender's system or entity.</td> 
                </tr> 

                <tr>
                  <td>Tag 56 (TargetCompID):  </td>
                  <td>The TargetCompID tag specifies the intended recipient or destination of the message, indicating the unique identifier or code assigned to the recipient's system or entity.</td> 
                </tr> 

                <tr>
                  <td>Tag 34 (MsgSeqNum):   </td>
                  <td>The MsgSeqNum tag denotes the sequence number of the message, facilitating message sequencing and ensuring message integrity and order.</td> 
                </tr> 

                <tr>
                  <td>Tag 52 (SendingTime):  </td>
                  <td>This tag indicates the timestamp of when the message was generated or transmitted, enabling synchronization and time-based processing across different systems.52 – SendingTime</td> 
                </tr> 
              </table>
            </li><br> 

            <li> 
              <strong class="blue"> Body: </strong>
               Serving as the essence of the message, the body carries specific data pertinent to the message type. Depending on the message type, the body may include details such as order quantity, security identifier, price, and timestamps.
            </li><br>

            <li> 
              <strong class="blue"> Trailer: </strong>
              Functioning as the closing segment, the trailer contains a checksum value. This checksum is calculated based on the entirety of the message content and acts as a vital security measure to ensure data integrity during transmission.
            </li><br> 

          </ul> 
        </div>


        <div class="para-text mt-5">
          <strong class="blue"> Building Blocks: Tags and Values </strong><br> 
          Each FIX message is a sequence of tag-value pairs, separated by a special character (SOH - Start of Header). Tags are numerical identifiers representing specific data points (e.g., tag 8 represents BeginString, tag 55 represents Symbol). Values correspond to the data associated with each tag. For instance, the tag-value pair "55=MSFT" indicates the message pertains to the security with the symbol "MSFT" (Microsoft). <br><br>

          A FIX message adheres to a standard format, commencing with the header, followed by the message body fields, and concluding with the trailer. The header typically includes tags like BeginString (tag #8), BodyLength (tag #9), and MsgType (tag #35), while the trailer culminates with the CheckSum (tag #10).
        </div>

        <div class="para-text mt-5">
          <strong class="blue"> Field Components </strong><br> 
          The tag value pair represent a Field. Each FIX message is composed of a sequence of such pairs, tag being the field and value being the value associated with that field in the pair. Each tag-value pair is delimited by an ASCII control character i.e. 0X01. Each tag has its own meaning. The definition of a field within a FIX message comprises four key components:
        </div>

        <table class="para-text mt-5" style="width:100%"> 
          <tr>
            <td>Name:  </td>
            <td>This provides a human-readable description of the field's purpose within the FIX protocol. It acts as a label, offering clear context for what the field represents. </td> 
          </tr> 
          
          <tr>
            <td>Number(Tag):  </td>
            <td>Each field is assigned a unique numerical identifier known as a tag. Tags are integral to FIX messaging, enabling standardized communication and interoperability between different systems and counterparties. For instance, the tag "8" represents the BeginString field in FIX protocol specifications.</td> 
          </tr> 

          <tr>
            <td>Data Type:   </td>
            <td>The data type specifies the format and nature of the data contained within the field. Common data types in FIX messaging include strings, integers, floats, dates, and more. Understanding the data type is essential for accurately parsing and interpreting the field's value. In the example of the BeginString field, the data type is "String," indicating that the value represents a textual string.</td> 
          </tr> 

          <tr>
            <td>Value:    </td>
            <td>The The actual value associated with the field in a particular message instance conveys specific information relevant to the message context. Values are often delimited by ASCII control characters, such as 0X01, for clear demarcation within the message. For instance, the value "FIX.4.4" in the BeginString field indicates the protocol version being utilized, providing essential information for message processing and interpretation.</td> 
          </tr>  
        </table>

        <div class="para-text mt-5">
          Let's examine the BeginString field as an example to elucidate the concept of field definitions: 
        </div><br> 

        <table class="para-text mt-5" > 
          <tr>
            <td>Name:  </td>
            <td>BeginString </td> 
          </tr> 
          
          <tr>
            <td>Number:  </td>
            <td>8</td> 
          </tr> 

          <tr>
            <td>Data Type: </td>
            <td>String</td> 
          </tr> 

          <tr>
            <td>Value:    </td>
            <td>FIX.4.4</td> 
          </tr>  
        </table>


        <div class="para-text mt-5">
          <strong class="blue"> Sample FIX Message and Interpretation</strong><br>
          
          Let's examine a sample raw FIX message and decipher its contents: <br><br>

          <strong>
            8=FIX.4.4|9=110|35=D|34=3|49=CLIENT|52=20190424-11:19:16.885|56=SERVER|11=ID|21=3|40=1|54=1|55=EUR/USD|60=20190424-11:19:16.885|10=054|
          </strong><br><br>
 
        </div><br> 

        <table class="para-text" style="width:100%"> 
          <tr>
            <th>Tag</th>
            <th>Value</th> 
            <th>Meaning</th> 
          </tr>
          <tr>
            <td>BeginString (Tag 8): </td>
            <td>FIX.4.4 </td> 
            <td>Indicates that the message adheres to the FIX protocol version 4.4 </td> 
          </tr> 
          
          <tr>
            <td>BodyLength (Tag 9):</td>
            <td>110 </td> 
            <td>Specifies the total length of the message body, excluding the header and trailer sections</td> 
          </tr> 

          <tr>
            <td>MsgType (Tag 35):</td>
            <td>D </td> 
            <td>Indicates that this message is an Order Single. The 'D' represents the message type, which signifies an order to buy or sell a security</td> 
          </tr> 

          <tr>
            <td>MsgSeqNum (Tag 34): </td>
            <td>3</td> 
            <td>Denotes the sequence number assigned to this message, facilitating proper sequencing and order management.</td> 
          </tr>  

          <tr>
            <td>SenderCompID (Tag 49):</td>
            <td>CLIENT </td> 
            <td>Identifies the sender of the message, in this case, the client's unique identifier or code</td> 
          </tr> 

          <tr>
            <td>SendingTime (Tag 52):</td>
            <td>20190424-11:19:16.885</td> 
            <td>Specifies the timestamp when the message was generated or transmitted by the sender, ensuring synchronization and time-based processing</td> 
          </tr>  

          <tr>
            <td>TargetCompID (Tag 56):</td>
            <td>SERVER </td> 
            <td>Identifies the recipient or target of the message, in this case, the server's unique identifier or code</td> 
          </tr> 

          <tr>
            <td>ClOrdID (Tag 11):</td>
            <td>ID</td> 
            <td>Represents the Client Order ID, a unique identifier assigned by the client to this particular order</td> 
          </tr> 

          <tr>
            <td>HandlInst (Tag 21)</td>
            <td>3 </td> 
            <td>Indicates the type of order handling instruction, which may specify how the order should be executed or processed.</td> 
          </tr> 

          <tr>
            <td>OrdType (Tag 40):</td>
            <td>1</td> 
            <td>Specifies the order type, where '1' typically represents a market order</td> 
          </tr> 

          <tr>
            <td>Side (Tag 54):</td>
            <td>1 </td> 
            <td>Indicates the side of the order, where '1' typically represents a buy order</td> 
          </tr> 

          <tr>
            <td>Symbol (Tag 55):</td>
            <td>EUR/USD</td> 
            <td>Identifies the security or financial instrument being traded, in this case, the Euro/US Dollar currency pair</td> 
          </tr> 

          <tr>
            <td>TransactTime (Tag 60):</td>
            <td>20190424-11:19:16.885 </td> 
            <td>Specifies the timestamp when the transaction occurred, ensuring accurate recording and synchronization</td> 
          </tr> 

          <tr>
            <td>CheckSum (Tag 10):</td>
            <td>054</td> 
            <td>Represents the checksum value calculated for the entire message, ensuring data integrity during transmission</td> 
          </tr> 
        </table>


        <div class="para-text mt-5">
          Another Example<br> <br> 
          <strong class="blue"> 8=FIX.4.1|9=61|35=A|34=1|49=EXEC|52=20121105-23:24:06|56=BANZAI|98=0|108=30|10=003|</strong> 
        </div>

        <div class="para-text mt-5"> 
          <strong class="blue"> In this example:</strong> 
          <ul style="list-style-type: circle;" class="ps-5">
            <li>  
              Tag 8 represents the FIX protocol version. 
            </li><br> 

            <li> Tag 9 denotes the length of the message. 
            </li>
            <li>   
                Tag 35 indicates the message type (e.g., 'A' for Logon). 
            </li> 
            <li>  
                Tags like 49 and 56 may represent sender and target identifiers, respectively.  
            </li> 
            <li> 
                Tag 10 serves as the checksum to ensure data integrity.
            </li> 
          </ul>
        </div>

        <div class="para-text mt-5">
          <strong class="blue"> Calculating Body Length</strong><br>
          Determining the length of the body is crucial for processing FIX messages accurately.  <br><br> 

          Here's a step-by-step guide to calculating the body length:
        </div>

        <div class="para-text mt-5"> 
          <strong class="blue"> In this example:</strong> 
          <ul style="list-style-type: number;" class="ps-5">
            <li>  
              Start counting characters from the beginning of the message, including the tag 35 field.
            </li><br> 

            <li> Continue counting until you reach, but do not include, the tag 10 (Checksum) field.
            </li>
            <li>   
                Include all characters, including SOH delimiters, in your count.
            </li>  
          </ul>
        </div>

        <div class="para-text mt-5">
          Another Example<br><br>
          <strong class="blue">
            8=FIX.4.2|9=65|35=A|49=SERVER|56=CLIENT|34=177|52=20090107-18:15:16|98=0|108=30|10=062|
          </strong> 
        </div>

        <div class="para-text mt-5">
          <strong class="blue"> Another Example:</strong> 
          <br>  
        </div>

        <div class="para-text mt-5"> 
          <strong class=" "> In this example:</strong> 
          <ul style="list-style-type: circle;" class="ps-5">
            <li>  
              We start counting from the beginning, including tag 35 (MsgType).
            </li><br> 

            <li> We continue counting until we reach, but do not include, tag 10 (Checksum).
            </li>
            <li>   
                The total count, including SOH delimiters, is 65 characters.
            </li>  
          </ul><br> 

          Therefore, the body length of this FIX message is 65. <br> 
        </div>

        <div class="para-text mt-5">
          <strong class="blue"> Calculating Checksum – Ensuring Data Integrity </strong><br> <br> 
          The checksum serves as a vital component in FIX messages for ensuring data integrity during transmission. By validating the checksum at the receiving end, parties can verify that the transmitted message has not been corrupted or tampered with en route. This verification mechanism enhances the reliability of financial transactions and minimizes the risk of errors or malicious interference <br> <br>

          The checksum is computed by summing up the ASCII values of all bytes up to the checksum field and taking the remainder when divided by 256. <br> <br>

          <strong>Let's illustrate the checksum calculation with an example:</strong> 

          Suppose the calculated checksum sum is 274. To transform this into a modulo 256 number, we perform the operation: 274 % 256 = 18. Therefore, the checksum value to be transmitted is 18. <br><br>

          In the FIX message, the checksum field is represented by the tag "10=". Thus, the checksum value 18 would be transmitted as "|10=018|".
        </div>

        <div class="para-text mt-5">
          <strong class="blue"> Repeating Groups </strong><br> 
          FIX messages may contain repeating groups, allowing for the repetition of fields within a defined group. These groups are delimited by specific tags and enable the efficient conveyance of nested or repetitive information. <br> <br>
 

          <strong>Example: Consider the following representation of a repeating group within a FIX message:</strong> 

          384=2<SOH>372=6<SOH>385=R<SOH>372=7<SOH>385=R<SOH> <br><br>

          In this example, the repeating group is delimited by tags 372 and 385. Each repetition of the group is separated by the tag 372, serving as a delimiter indicating the start of a new instance. <br><br>
 
        </div>

        <div class="para-text mt-5"> 
          <strong class="blue"> Key Concepts:</strong> 
          <ul style="list-style-type: circle;" class="ps-5">
            <li>  
              <strong>Field Repetition: </strong> Fields within a repeating group can be repeated multiple times to convey varying instances of related data.
            </li><br> 

            <li> 
              <strong>First Field Requirement:  </strong> The first field within a repeating group is mandatory and serves as a delimiter to indicate the start of each repetition.
            </li>

            <li> 
              <strong>NoXXX Field:   </strong> This field specifies the number of instances of the repeating group and precedes the actual content of the group.
            </li>

            <li> 
              <strong>Required Fields: </strong> If a field within a repeating group is marked as required, it must appear in every instance of that group.
            </li>

            <li> 
              <strong>Nested Repeating Groups:  </strong> Repeating groups can be nested within other repeating groups, allowing for multi-level nesting to represent complex data structures.
            </li>  
          </ul> 
        </div>

        <div class="para-text mt-5"> 
          <strong class="blue"> FIX Session vs Admin Messages:</strong> 

          FIX messages can be categorized into two main types administrative messages and application messages, each serving distinct purposes within the trading ecosystem:


          <ul style="list-style-type: number;" class="ps-5">
            <li>  
              <strong>Administrative Messages: </strong> Administrative messages are primarily concerned with the management and maintenance of the FIX session between trading parties. These messages handle basic administrative tasks necessary for establishing, maintaining, and terminating communication channels. Key examples of administrative messages include:

              <ul style="list-style-type: circle;" class="ps-5">
                <li>  
                  <strong>Logon (35=A):</strong>
                   The Logon message is the initial message sent by a trading party to authenticate itself with the FIX server and establish a data transfer session. It serves as the starting point for communication between counterparties, ensuring that both parties are properly identified and authorized to participate in the session.
                </li><br> 

                <li> 
                  <strong>Heartbeat (35=0):   </strong> 
                  Heartbeats play a crucial role in maintaining the health and integrity of FIX sessions by verifying that the communication channels between counterparties are operational and responsive.
                </li>

                <li> 
                  <strong>Logout (35=5):</strong> 

                   The Logout message signals the orderly termination of the FIX session and indicates that the trading parties are disconnecting from the trading server. It serves as a formal notification of session closure, allowing both parties to perform any necessary cleanup or finalization tasks before ending the communication session.
                </li>

                <li> 
                  <strong>Resend Request (35=2): </strong> 
                  The Resend Request message is utilized to request the re-transmission of lost or out-of-sequence FIX messages during a session. Typically, the FIX Engine that detects a sequence gap or missing message sends the Resend Request to prompt the re-transmission of specific messages. When re-sending messages, the sending FIX Engine may assess factors like message relevance, timeliness, and market dynamics to avoid re-transmitting stale or outdated data.
                </li>

                <li> 
                  <strong>Test Request (35=1): </strong> 
                   The Test Request message is employed to verify the operational status and responsiveness of the counterparties' FIX Engines. A FIX Engine sends the Test Request to prompt its counterpart to generate a Heartbeat message in response, confirming the active status of the communication channel. The TestReqID field (tag 112) included in the Test Request serves to confirm that the subsequent Heartbeat response is specifically triggered by the Test Request, rather than a routine timeout. Upon receiving the Test Request, the opposing FIX Engine responds with a Heartbeat message containing the TestReqID, affirming the active status of the communication line.
                </li>

                <li> 
                  <strong>Sequence Reset Request (35=4): </strong> 
                  The Sequence Reset message is utilized to synchronize and reset the incoming sequence number on the opposing FIX engine, especially in scenarios where message sequence integrity is compromised or requires adjustment.
                </li>  
              </ul>

              <div class="para-text mt-5">
                <strong class="blue"> Modes of Operation</strong><br>
                Sequence Reset - Gap Fill (GapFillFlag = 'Y'): This mode is employed when there is a need to fill the gaps caused by missing messages or selectively omitted messages during Resend Request processing. It allows the sending FIX engine to transmit only essential or relevant messages to fill the sequence gaps, avoiding the re-transmission of unnecessary administrative or session-level messages.  <br><br> 

                Sequence Reset - Reset (GapFillFlag = 'N' or not present): This mode should be used sparingly and only in extreme cases, such as catastrophic failures or disasters that cannot be resolved through Gap Fill mode. It resets the message sequence entirely, effectively restarting the sequence numbering from a designated point, which can have significant implications and should be used with caution.  <br><br> 

                Administrative messages play a vital role in ensuring the integrity and stability of the FIX communication infrastructure, facilitating secure and reliable data exchange between trading entities. 
              </div>

            </li><br> 

            <li> 
              <strong>Application Messages: </strong> 

              Application messages constitute the core of FIX communication, conveying essential business information related to trade orders, executions, market data, and the current state of orders. Unlike administrative messages, which focus on session management, application messages directly impact trading decisions and operational activities. Key examples of application messages include:<br><br>
              New Order Single (35=D): Initiates a new order request, indicating the user's desire to place a trade in the market. This message includes essential order details such as security identifier, order type, quantity, and price. <br><br>
              Execution Report (35=8): Provides detailed information about the status of executed trades, canceled orders, or order modifications. Execution reports convey critical trade execution details, including execution price, quantity, and order status.<br><br>
              Market Data Request (35=V): Subscribes to real-time market data feeds, enabling traders to receive updated information on quotes, market depth, and other relevant market metrics.

            </li> 
          </ul> 
        </div>

        <div class="border-line mt-5"></div>
    </div>

    

    <div class="row py-6 recent">
      <h2 class="my-1 small-title-dark font-bold leading-tight text-gray-800 pb-5">
          More Blogs
      </h2>


      <div class="col-12 col-md-4 col-lg-4 mb-5">
        <a href="blog_2.php">
          <div class="w-full bg-white border border-gray-200 rounded-3 overflow-hidden hover:shadow-lg transition duration-300">
            <img src="https://img.freepik.com/free-photo/beautiful-cryptocurrwncy-concept_23-2149250208.jpg" class="height-20 w-100 object-cover">

            <div class="d-flex items-center mt-2 p-4">
                <img src="assets/img/profile.jpg" alt="Author Avatar"  class="h-8 w-8 rounded-full">
                <div class="para-text ml-2" style="font-size: 1.2rem!important;">By Author Name <br> 13th Mar 2023</div>
            </div> 
   
            <div class="p-4">
              <h2 class="my-1 small-title-dark font-bold leading-tight text-gray-800">
              BlitzTrader: Unlock Your Inner Quant with the Future of Algorithmic Trading</h2>
              
              <p class="para-text py-3" >In the landscape of algorithmic trading platforms, Blitz stands out as a revolutionary solution. Unlike....</p>
              
              <div class="border-line"></div>

              <div class="d-flex mt-3">
                <div class="w-75 text-box-bottom">
                  Read More
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                  </svg>
                </div>
            </div> 
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-md-4 col-lg-4 mb-5">
        <a href="blog_3.php">
          <div class="w-full bg-white border border-gray-200 rounded-3 overflow-hidden hover:shadow-lg transition duration-300">
            <img src="https://img.freepik.com/free-photo/young-worker-leading-business-meeting-about-cryptocurrencies-office_1268-21493.jpg" class="height-20 w-100 object-cover">

            <div class="d-flex items-center mt-2 p-4">
                <img src="assets/img/profile.jpg" alt="Author Avatar"  class="h-8 w-8 rounded-full">
                <div class="para-text ml-2" style="font-size: 1.2rem!important;">By Author Name <br> 13th Mar 2023</div>
            </div> 
   
            <div class="p-4">
              <h2 class="my-1 small-title-dark font-bold leading-tight text-gray-800">
              The Transformative Role of Technology in Modern Trading <br> &nbsp</h2>
              
              <p class="para-text py-3" >In the ever-evolving landscape of financial markets, technology plays a pivotal role, revolutionizing the  ....</p>
              
              <div class="border-line"></div>

              <div class="d-flex mt-3">
                <div class="w-75 text-box-bottom">
                  Read More
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                  </svg>
                </div>
            </div> 
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-md-4 col-lg-4 mb-5">
        <a href="blog_4.php">
          <div class="w-full bg-white border border-gray-200 rounded-3 overflow-hidden hover:shadow-lg transition duration-300">
            <img src="https://img.freepik.com/free-photo/close-up-documents-with-colorful-graphs_1232-139.jpg" class="height-20 w-100 object-cover">

            <div class="d-flex items-center mt-2 p-4">
                <img src="assets/img/profile.jpg" alt="Author Avatar"  class="h-8 w-8 rounded-full">
                <div class="para-text ml-2" style="font-size: 1.2rem!important;">By Author Name <br> 13th Mar 2023</div>
            </div> 
   
            <div class="p-4">
              <h2 class="my-1 small-title-dark font-bold leading-tight text-gray-800">
              Algorithmic Trading: The Future of Financial Markets  <br> &nbsp  </h2>
              
              <p class="para-text py-3" >Algorithmic trading, or "algo trading," refers to the use of computer programs to automatically execute trades   ....</p>
              
              <div class="border-line"></div>

              <div class="d-flex mt-3">
                <div class="w-75 text-box-bottom">
                  Read More
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                  </svg>
                </div>
            </div> 
            </div>
          </div>
        </a>
      </div>
    </div>
  </section> 
 
 
  <?php include 'footer.php';?>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit-icons.min.js'></script>

  <script  src="assets/js/script.js"></script>
</body> 
<script type="text/javascript">
  $(function () {
     $('.toggle-menu').click(function(){
      $('.exo-menu').toggleClass('display');
     });
  });
</script>
</html>
