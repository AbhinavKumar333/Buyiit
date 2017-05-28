#include<iostream>
#include<stdio.h>
using namespace std;
#include<limits.h>

void dij(int src,int V,int dist[],int cost[10][10]){
    int coun,mi,flag[V],u;
    for(int i=1;i<=V;i++){
        flag[i] = 0;
        dist[i] = cost[src][i];
    }
    coun = 2;
    while(coun <= V){
        mi = 99;
        for(int i=1;i<=V;i++){
            if(dist[i] < mi && !flag[i]){
                mi = dist[i]; u = i;
            }
        }
        flag[u] = 1;
        coun++;

        for(int i=1;i<=V;i++){
            if((dist[u] + cost[u][i] < dist[i]) && !flag[i]){
                dist[i] = dist[u] + cost[u][i];
            }
        }
    }


}

int main(){
    int src,V,dist[V],cost[10][10];
    cout<<"vertices";
    cin>>V;

    cout<<"Enter matrix";
    for(int i =1;i<=V;i++){
        for(int j=1;j<=V;j++){
            cin>>cost[i][j];
            if(cost[i][j] == 0)
                cost[i][j] = INT_MAX;
        }
    }

    cout<<"Enter src\n";
    cin>>src;
    dij(src,V,dist,cost);

    for(int i=1;i<=V;i++)
        if(i!=src)
            cout<<src<<" -> "<<i<<" cost "<<dist[i]<<endl;
}


