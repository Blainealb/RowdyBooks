#!/usr/bin/python3
import sys
from azure.communication.email import EmailClient

# NOTE:
#---------------------------------------------------------------------------------------------------------------------------
# This code was a sample from the Azure portal that was modified to meet the needs of this project.
# While there is no direct link to this code sample, it can be found under the "try email" option
# under any Communication Service resource a user creates/has privileges for in the Azure portal.
# The Azure portal can be found at: https://portal.azure.com
# Microsoft provides documentation for this code at:
# https://docs.microsoft.com/azure/communication-services/quickstarts/email/send-email?tabs=windows&pivots=programming-language-python
#---------------------------------------------------------------------------------------------------------------------------

# File: sendEmail.py
# Description: This script is used to send an email to a new user's email address after they create an account.
# This script is called by a PHP file and receives an email address as a command line argument.
# The email address received as a command line argument will be the address to send the email to.
# Code sample implemented by: Kaleb Phillips
def main():
    try:
        recipient = sys.argv[1]
        code = sys.argv[2]
        connection_string = "endpoint=https://communication-service-rowdybooks.unitedstates.communication.azure.com/;accesskey=MLYZaolSAu18QXE1quR9MRB+nrXsApsvuZNP6MYg4Fr4qVcMWlx8h+3kIdL87JI+VNH6tzQt1GBdLhJUtir9NQ=="
        client = EmailClient.from_connection_string(connection_string)

        message = {
            "senderAddress": "RowdyBooks-DoNotReply@abfc234f-4863-48ce-b710-dd94d080461e.azurecomm.net",
            "recipients":  {
                "to": [{"address": recipient }],
            },
            "content": {
                "subject": "Verify Your Email",
                "plainText": ("Welcome to RowdyBooks!\n" 
                "Enter this code to verify your email address:\n"
                "{}".format(code)),
            }
        }

        poller = client.begin_send(message)
        result = poller.result()

    except Exception as ex:
        print(ex)
main()
