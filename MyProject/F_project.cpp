#include<iostream>
#include<cstdio>
#include<cstdlib>
#include<cmath>
#include<vector>
#include<set>
#include<ctime>
#include<algorithm>
#include<list>
#include<queue>
#include<cstring>

using namespace std;

static int GUESS=1;
int TOTAL_LEAVES=4;
string days[]={"TU","WE","TH","FR","SA","SU","MO"};

void input(){

    freopen("in.txt","r",stdin);
    freopen("output.txt","w",stdout);
}

struct employee{
    string name;
    int s_no;
    long long emp_id;
};

int main(){
    input();
    srand(time(NULL));
    cout<<"\t\tENTER THE EMPLOYEE DETAILS:"<<endl<<endl;
    cout<<"Enter the number of employees:\n";

    int number;
    cin>>number;

    cout<<"\nEnter the Name and Employee ID:\n";

    employee e[number];

    for(int i=0;i<number;i++){
        cin>>e[i].name>>e[i].emp_id;
        e[i].s_no=i+1;
    }

    cout<<endl<<endl;
    cout<<"-----------------------------------------------------------------------------------------------------------------\n";
    cout<<"\t\tDETAILS OF THE EMPLOYEE ARE AS FOLLOWS:\n\n";
    for(int i=0;i<number;i++)
        cout<<e[i].s_no<<' '<<e[i].name<<' '<<e[i].emp_id<<endl;

    // LOGIC BEGINS HERE

    //false for leave, and true for present

    bool shift[31][number][3];
    memset(shift,false,sizeof shift);

    for(int i=0;i<31;i++){
        for(int j=0;j<number;j++){

            int _random= (i+j)%3;
            shift[i][j][_random]=true;

        }
    }

    //allocating holidays
    for(int i=0;i<31;i++){
        int t= i%7;
        if(!(t==3 || t==6)){

           int h=4;
            while(h--){
                int r= rand()%26;
                while(1){
                    if(!(shift[i][r][0]==false && shift[i][r][1]==false &&shift[i][r][2]==false))
                        break;
                    else
                        r= rand()%26;
                    }

                shift[i][r][0]=shift[i][r][1]=shift[i][r][2]=false;
            }

           }
    }


    //OUTPUT FORMAT

        cout<<endl<<"                                    **************************   DUTY CHART FOR JULY  ***************************\n";
        cout<<"SN "<<"EMPLOYEE ";
        cout<<"    EMP_ID    ";

    for(int i=0;i<31;i++)
        cout<<"D"<<i+1<<' ';
    cout<<endl;

    //PRINT DAYS
    cout<<"                          ";
    for(int i=0;i<31;i++){
        cout<<days[(i%7)]<<' ';
        if(i>8) cout<<' ';
    }
    cout<<endl;

    //PRINT DETAILS
    for(int i=0;i<number;i++){
            cout<<endl<<e[i].s_no<<" ";
        if(e[i].s_no<=9) cout<<' ';

        int k;
        for( k=0;k<e[i].name.size();k++){
            if(e[i].name[k]>='a' && e[i].name[k]<='z')
                cout<<e[i].name[k];
        }
        for(;k<10;k++)
            cout<<' ';

        cout<<" "<<e[i].emp_id<<"  ";

        for(int j=0;j<31;j++){

            if(shift[j][i][0]==true){
                cout<<"S1 ";
            }
            else if(shift[j][i][1]==true){
                cout<<"S2 ";
            }
            else if(shift[j][i][2]==true){
                cout<<"S3 ";
            }
            else
                cout<<"OL ";
            // specific case for D10 - D31
            if(j>8)
                cout<<' ';
        }
    }

    return 0;
}
