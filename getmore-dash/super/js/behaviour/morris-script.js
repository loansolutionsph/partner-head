var Script = function () {
  $(function () {
    Morris.Bar({
      element: 'leadsIn',
      data: [
      {month: 'Jul 29', leads: 136},
      {month: 'Jul 30', leads: 137},
      {month: 'Aug 1', leads: 289},
      {month: 'Aug 2', leads: 245},
      {month: 'Aug 3', leads: 54},
      {month: 'Aug 4', leads: 12},
      {month: 'Aug 5', leads: 43},
      {month: 'Aug 6', leads: 97},
      {month: 'Aug 7', leads: 784},
      {month: 'Aug 8', leads: 235},
      {month: 'Aug 9', leads: 457},
      {month: 'Aug 10', leads: 27},
      {month: 'Aug 11', leads: 154},
      {month: 'Aug 12', leads: 67},
      {month: 'Aug 13', leads: 64},
      {month: 'Aug 14', leads: 70},
      {month: 'Aug 15', leads: 5},
      {month: 'Aug 16', leads: 7}
      ],
      xkey: 'month',
      ykeys: ['leads'],
      labels: ['Leads'],
      barRatio: 0.4,
      xLabelAngle: 35,
      hideHover: 'auto',
      barColors: ['#15a4fa']
    });
    Morris.Donut({
      element: 'trafficSource',
      data: [
      {value: 49, label: 'Adwords Display'},
      {value: 9, label: 'Adwords Search'},
      {value: 4, label: 'Classified Ads'},
      {value: 5, label: 'Direct'},
      {value: 31, label: 'Email'},
      {value: 2, label: 'Facebook'}
      ],
      colors: [
      '#77d85c',
      '#6c717c',
      '#715bd2',
      '#3db9e3',
      '#ffd301',
      '#ff4867'
      ],
      formatter: function (x) { return x + "%"}
    });
    Morris.Bar({
      element: 'agentPerformance',
      data: [
      {x: 'Agent 1', callback: 50, meetup: 120, notInterested: 46, sold: 15, archived: 34},
      {x: 'Agent 2', callback: 50, meetup: 120, notInterested: 46, sold: 15, archived: 34},
      {x: 'Agent 3', callback: 120, meetup: 46, notInterested: 15, sold: 34, archived: 50},
      {x: 'Agent 4', callback: 50, meetup: 15, notInterested: 34, sold: 120, archived: 46},
      {x: 'Agent 5', callback: 46, meetup: 50, notInterested: 15, sold: 120, archived: 34}
      ],
      xkey: 'x',
      ykeys: ['callback', 'meetup', 'notInterested','sold','archived'],
      labels: ['For Callback', 'For Meetup', 'Not Interested', 'Sold', 'Archived'],
      stacked: true
    });

     Morris.Bar({
      element: 'agentConversations',
      data: [
      {x: 'Agent 1', complaint: 46, inquiry: null, followUp2: 46, escalation: 15, docSubmit: 34, others: 6},
      {x: 'Agent 2', complaint: 15, inquiry: 20, followUp2: 46, escalation: 15, docSubmit: 34, others: 6},
      {x: 'Agent 3', complaint: 10, inquiry: 76, followUp2: 15, escalation: 34, docSubmit: 50, others: 6},
      {x: 'Agent 4', complaint: null, inquiry: 95, followUp2: 34, escalation: 120, docSubmit: 46, others: 6},
      {x: 'Agent 5', complaint: 4, inquiry: 40, followUp2: 15, escalation: 120, docSubmit: 46, others: 6}
      ],
      xkey: 'x',
      ykeys: ['complaint', 'inquiry', 'followUp2','escalation','docSubmit','others'],
      labels: ['Complaint', 'Inquiry', 'Second Follow Up', 'Escalation', 'Doc Submission', 'Others'],
      stacked: true
    });
  });
}();
